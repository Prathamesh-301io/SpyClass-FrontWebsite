<?php

namespace App\Controllers;
use App\Models\CommonModel;
use App\Models\UsersModel;
class Authenticate extends BaseController
{
	protected $data;
	public function __construct()
    {
        $this->data = (new CommonModel())->prepareToasterData();
    }

    public function fSignUp()
    {        
        return view('authentication/sign_in', $this->data);
    }

    function fVerifyUser()
    {
    	$sEmail = $this->request->getPost('user_email');
    	$sPassword = $this->request->getPost('user_password');
    	$bError = true;
        $ipAddress = $this->request->getIPAddress();

        // Check if the IP is blocked

    	if($sPassword == '' && $sEmail == ''){
            $bError = false;
            session()->setFlashdata([
                'message' => 'Please enter email id & password',
                'status'  => 404
            ]);

            return redirect()->to($this->data['panel']);
        }
        
        $aUserDetails = (new UsersModel())->where([
            'user_email' => $sEmail,
            'is_active' => 0
        ])->findAll();
        if(empty($aUserDetails)){
            $bError = false;
            session()->setFlashdata([
                'message' => 'User details not found.',
                'status'  => 404
            ]);
            return redirect()->to($this->data['panel']);
        }

        if (!password_verify($sPassword, $aUserDetails[0]['user_password'])){
            $bError = false;

            session()->setFlashdata([
                'email_id'=> $sEmail,
            ]);
            session()->setFlashdata([
                'message' => 'Please enter valid password.',
                'status'  => 404
            ]);
           return redirect()->to($this->data['panel']);
        }


        session()->set([
            'isLoggedIn' => true,
            'role_id' => $aUserDetails[0]['user_role'],
            'id' => $aUserDetails[0]['id'],
            'email' => $aUserDetails[0]['user_email'],
            'name' => $aUserDetails[0]['user_name']
        ]);

        if($bError){
            return redirect()->to($this->data['panel'].'/dashboard');
        }else{
            return redirect()->to($this->data['panel']);
        }
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata([
            'message' => 'Thanks for login.',
            'status'  => 300
        ]);
        return redirect()->to($this->data['panel'].'');
    }
}