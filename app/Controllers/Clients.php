<?php

namespace App\Controllers;

use App\Models\CommonModel;
use App\Models\Master_model;
use App\Models\ClientsModel;
use CodeIgniter\API\ResponseTrait;

class Clients extends BaseController
{
    public $data = array();
    use ResponseTrait;
    public function __construct()
    {
        $this->data = (new CommonModel())->prepareToasterData();
        $this->data['menu'] = 'navClients';
        $this->data['submenu'] = 'itemClients';
        $this->data['aClinetsList'] = (new Master_model())->getRecords('inv_clients',['is_active'=>0]);
    }

    public function index(){
        return view('clients/index', $this->data);
    }
    function fGetClientList($page = 1)
    {
        $ClientsModel = new ClientsModel();
        $search = $this->request->getVar('search');
        $perPage = 10; // Number of products per page
        $offset = ($page - 1) * $perPage;

        if ($search) {
            $ClientsModel->groupStart()
                ->like('company_name', $search)
                ->orLike('company_gstin', $search)
                ->groupEnd();
        }
        // Fetch paginated data
        $clients = $ClientsModel->where('is_active', 0)->orderBy('id', 'DESC')->findAll($perPage, $offset);

        $totalUsers = $ClientsModel->where('is_active', 0)->orderBy('id', 'DESC')->paginate($perPage, 'default', $page);
        $pager = $ClientsModel->pager;

        $data = [
            'aClientData' => $clients,
            'pager' => $pager,
            'total' => $totalUsers,
            'perPage' => $perPage,
            'currentPage' => $page,
            'currentId' => $page == 1 ? 1 : ($offset + 1),
            'panel' => $this->data['panel'],
            'url' => '/clients'
        ];

        $tableHtml = view('clients/list', $data);
        $paginationHtml = view('common/board/pagination', $data);

        return $this->respond(['table' => $tableHtml, 'pagination' => $paginationHtml]);
    }

    function fNewClient()
    {
        return view('clients/client', $this->data);
    }

    function fAddClient()
    {
        $Client_id = $this->request->getPost('Client_id');
        $ClientData = [
            'company_name' => $this->request->getPost('company_name') ?? "",
            'company_email' => $this->request->getPost('company_email') ?? "",
            'address' => $this->request->getPost('address') ?? "",
            'company_gstin' => $this->request->getPost('company_gstin') ?? "",
            'state' => $this->request->getPost('state') ?? "",
            'zipcode' => $this->request->getPost('zipcode') ?? "",
            'city' => $this->request->getPost('city') ?? "",
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        try {
            if (empty($Client_id)) {
                (new ClientsModel())->insert($ClientData);
                session()->setFlashdata([
                    'message' => "Client added successfully.",
                    'status'  => 200
                ]);
            } else {
                (new ClientsModel())->update($Client_id, $ClientData);
                session()->setFlashdata([
                    'message' => "Client updated successfully.",
                    'status'  => 200
                ]);
            }
            return redirect()->to($this->data['panel'] . '/clients');
        } catch (Exception $e) {
            session()->setFlashdata([
                'message' => "Something went wrong",
                'status'  => 300
            ]);
            return redirect()->back();
        }
    }
    
    public function fEditClient($isClientId)
    {
        try {
            $this->data['aClientData'] = (new ClientsModel())->where('is_active', 0)->find($isClientId);
            if (empty($this->data['aClientData'])) {
                session()->setFlashdata([
                    'message' => 'Invalid company details.',
                    'status'  => 300
                ]);
                return redirect()->to($this->data['panel'] . '/clients');
            }
            return view('clients/client', $this->data);
        } catch (Exception $e) {
            session()->setFlashdata([
                'message' => "Something went wrong.",
                'status'  => 300
            ]);
            return redirect()->to($this->data['panel'] . '/clients');
        }
    }

    
    function fChangeUserStatus($action, $id)
    {
        $aCompanyData = (new ClientsModel())->find($id);
        if (empty($aCompanyData)) {
            session()->setFlashdata([
                'message' => "Invalid data.",
                'status'  => 404
            ]);
            return redirect()->back();
        }

        $aClientStatus = array();
        try {
            switch ($action) {
                case 1:
                    $aClientStatus = [
                        'is_active' => 1
                    ];
                    break;
                default:
                    session()->setFlashdata([
                        'message' => "Invalid data.",
                        'status'  => 404
                    ]);
                    return redirect()->back();
            }
            (new ClientsModel())->update($id, $aClientStatus);
            session()->setFlashdata([
                'message' => "Client deleted successfully.",
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


















    // For add clients modal form in invoice 
    public function fAddNewClient(){
        $CompanyId = $this->request->getPost('company_id');

        $aCompanyData = [
            'company_name' => $this->request->getPost('company_name') ?? "",
            'company_email' => $this->request->getPost('company_email') ?? "",
            'address' => $this->request->getPost('address') ?? "",
            'company_gstin' => $this->request->getPost('company_gstin') ?? "",
            'state' => $this->request->getPost('state') ?? "",
            'zipcode' => $this->request->getPost('zipcode') ?? "",
            'city' => $this->request->getPost('city') ?? "",
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        try {
            if (empty($CompanyId)) {
                $ClientId =   (new ClientsModel())->insert($aCompanyData);
                $comp_name = $this->request->getPost('company_name');
                echo json_encode(['status' => 200,
                'data' => [
                    'id' => $ClientId,
                    'company_name' => $comp_name
                ],
                'message' => 'Client added successfully.']);
            } else {
                (new ClientsModel())->update($CompanyId, $aCompanyData);
                echo json_encode(['status' => 300, 'message' => 'Client updated successfully.']);
            }
        } catch (Exception $e) {
            echo json_encode(['success' => 300, 'message' => 'Please fill in all required fields.']);
        }
    }


}
