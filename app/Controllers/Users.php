<?php

namespace App\Controllers;
use App\Models\CommonModel;
use App\Models\UsersModel;
use App\Models\UserRoleModel;
use CodeIgniter\API\ResponseTrait;

class Users extends BaseController
{
	public $data = array();
    use ResponseTrait;
	public function __construct()
    {
        $this->data = (new CommonModel())->prepareToasterData();
        $this->data['menu'] = 'navUsers';
    }

    function index(){
        $this->data['submenu'] = 'manageUsers';
        $this->data['aUserData'] = (new UsersModel())->where('user_role >', session()->get('role_id'))->findAll();
    	return view('users/index', $this->data);
    }

    function fGetUsersList($page = 1)
    {
        $userModel = new UsersModel();
        $search = $this->request->getVar('search');
        $perPage = 10; // Number of products per page
        $offset = ($page - 1) * $perPage;

        if ($search) {
            $userModel->groupStart()
                ->like('user_name', $search)
                ->orLike('user_email', $search)
                ->groupEnd();
        }
        // Fetch paginated data
        $users = $userModel->whereIn('is_active', [0,1])->whereNotIn('user_role', [3])->orderBy('id', 'DESC')->where('user_role >', session()->get('role_id'))
                                  ->findAll($perPage, $offset);
        $totalUsers = $userModel->whereIn('is_active', [0,1])->whereNotIn('user_role', [3])->where('user_role >', session()->get('role_id'))->orderBy('id', 'DESC')->paginate($perPage, 'default', $page);
        $pager = $userModel->pager;

        $productsWithPlans = [];
        

        $data = [
            'aUserData' => $users,
            'pager' => $pager,
            'total' => $totalUsers,
            'perPage' => $perPage,
            'currentPage' => $page,
            'currentId' => $page == 1 ? 1 : ($offset + 1),
            'panel' => $this->data['panel'],
            'url' => '/users'
        ];

        // print_r($data);die();

        // Render the views and get the HTML
        $tableHtml = view('users/list', $data);
        $paginationHtml = view('common/board/pagination', $data);

        return $this->respond(['table' => $tableHtml, 'pagination' => $paginationHtml]);
    }

    function fRegisterUsers()
    {
        $this->data['submenu'] = 'registerUsers';
        $this->data['aUserRoles'] = (new UserRoleModel())->where([
                'is_active' => 0,
                'id >' => session()->get('role_id')
            ])->findAll();
        return view('users/register_user', $this->data);
    }

    function fRegisterNewUsers()
    {
        $aUserDetails = [
            'user_role' => $this->request->getPost('user_role') ?? "",
            'user_name' => $this->request->getPost('user_name') ?? "",
            'user_email' => $this->request->getPost('user_email') ?? "",
            'user_mobile' => $this->request->getPost('user_mobile') ?? "",
            'user_password' => $this->request->getPost('user_password') && ($this->request->getPost('user_password') == $this->request->getPost('user_confirm_password')) ? password_hash($this->request->getPost('user_password'), PASSWORD_DEFAULT) : "",
            'is_active' => 0
        ];

        // session()->setFlashdata($aUserDetails);
        if($aUserDetails['user_role'] == '' && $aUserDetails['user_name'] == '' && $aUserDetails['user_email'] == '' && $aUserDetails['user_password'] == ''){
            session()->setFlashdata([
                'message' => "Invalid data or password doesn't match.",
                'status'  => 404,
                'aUserDetails' => $aUserDetails
            ]);
            return redirect()->back();
        }

        try {
            $bVerifyUserEmail = (new UsersModel())->where([
                'is_active' => 0,
                'user_email' => $aUserDetails['user_email']
            ])->findAll();

            if(!empty($bVerifyUserEmail)){
                session()->setFlashdata([
                    'message' => "Email Already register with us.",
                    'status'  => 300,
                    'aUserDetails' => $aUserDetails
                ]);
                return redirect()->back();
            }

            if(!(new UsersModel())->insert($aUserDetails)){
                session()->setFlashdata([
                    'message' => "Failed to add users.",
                    'status'  => 300,
                    'aUserDetails' => $aUserDetails
                ]);
                return redirect()->back();
            }

            session()->setFlashdata([
                'message' => "User added successfully.",
                'status'  => 200
            ]);
            return redirect()->to($this->data['panel'].'/users');

        } catch (Exception $e) {
            session()->setFlashdata([
                'message' => "Something went wrong",
                'status'  => 300
            ]);
            return redirect()->back();
        }
    }

    public function fEditUsersDetails($iUserId)
    {
        if(session()->get('role_id') != 1 && session()->get('role_id') != $iUserId){
            session()->setFlashdata([
                'message' => 'Invalid Access.',
                'status'  => 300
            ]);
            return redirect()->back();
        }

        $this->data['submenu'] = 'manageUsers';
        try {
            $this->data['aUserData'] = (new UsersModel())->where('is_active', 0)->find($iUserId);
            $this->data['aUserRoles'] = (new UserRoleModel())->where('is_active', 0)->findAll();
            if(empty($this->data['aUserData'])){
                session()->setFlashdata([
                    'message' => 'Invalid user details.',
                    'status'  => 300
                ]);
                return redirect()->to($this->data['panel'].'/users');
            }
            return view('users/edit_user', $this->data);
        } catch (Exception $e) {
            session()->setFlashdata([
                'message' => "Something went wrong.",
                'status'  => 300
            ]);
            return redirect()->to($this->data['panel'].'/users');
        }        
    }

    function fUpdateUsersDetails()
    {
        $iUserId = $this->request->getPost('user_id') ?? 0;
        $sUserName = $this->request->getPost('user_name') ?? '';
        $sUserEmail = $this->request->getPost('user_email') ?? '';

        if($iUserId == 0 || $sUserName == '' || $sUserEmail == ''){
            session()->setFlashdata([
                'message' => "Invalid data.",
                'status'  => 404
            ]);
            return redirect()->back();
        }

        // Fetch user data from POST request
        $userData['user_role'] = $this->request->getPost('user_role');
        $userData['user_name'] = $this->request->getPost('user_name');
        $userData['user_mobile'] = $this->request->getPost('user_mobile');
        if(session()->get('role_id') == 1){
            $userData['user_email'] = $this->request->getPost('user_email');
        }

        // Update user information
        if ((new UsersModel())->update($iUserId, $userData)) {
            // Success message or redirection
            session()->setFlashdata([
                'message' => "User profile updated successfully.",
                'status'  => 300
            ]);
            return redirect()->to($this->data['panel'].'/users/edit/'.$iUserId);
        } else {
            // Error message or redirection
            session()->setFlashdata([
                'message' => "Failed to update user information.",
                'status'  => 300
            ]);
            return redirect()->back();
        }
    }

    function fChangeUsersPassword()
    {
        $iUserId = $this->request->getPost('user_id') ?? 0;
        $sUserPassword = $this->request->getPost('user_password') ?? '';
        $sUserConfirmPassword = $this->request->getPost('user_confirm_password') ?? '';

        if($iUserId == 0 || $sUserPassword == '' || $sUserPassword != $sUserConfirmPassword){
            session()->setFlashdata([
                'message' => "Invalid data.",
                'status'  => 404
            ]);
            return redirect()->back();
        }

        // Fetch user data from POST request
        $userData = [
            'user_password' => password_hash($this->request->getPost('user_password'), PASSWORD_DEFAULT)
        ];

        // Update user information
        if ((new UsersModel())->update($iUserId, $userData)) {
            // Success message or redirection
            session()->setFlashdata([
                'message' => "User password updated successfully.",
                'status'  => 300
            ]);
            return redirect()->to($this->data['panel'].'/users/edit/'.$iUserId);
        } else {
            // Error message or redirection
            session()->setFlashdata([
                'message' => "Failed to update password.",
                'status'  => 300
            ]);
            return redirect()->back();
        }
    }

    function fChangeUserStatus($action, $id)
    {
        $aUsersData = (new UsersModel())->find($id);
        if (empty($aUsersData)) {
            session()->setFlashdata([
                'message' => "Invalid data.",
                'status'  => 404
            ]);
            return redirect()->back();
        }

        $aUserStatus = array();
        try {
            switch ($action) {
                case 1:
                    $aUserStatus = [
                        'is_active' => 1 
                    ];
                    break;
                case 0:
                    $aUserStatus = [
                        'is_active' => 0
                    ];
                    break;
                case 2:
                    $aUserStatus = [
                        'is_active' => 2
                    ];
                    break;
                default:
                    session()->setFlashdata([
                        'message' => "Invalid data.",
                        'status'  => 404
                    ]);
                    return redirect()->back();
            }
            (new UsersModel())->update($id, $aUserStatus);
            session()->setFlashdata([
                'message' => "User status updated successfully.",
                'status'  => 300
            ]);
            return redirect()->back();
        } catch (Exception $e) {
            session()->setFlashdata([
                'message' => "Something went wrong.",
                'status'  => 300
            ]);
            return redirect()->back();
        }
    }
}