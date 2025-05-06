<?php

namespace App\Controllers;

use App\Models\CommonModel;
use App\Models\Master_model;

class Dashboard extends BaseController
{
    public $data = array();
    public function __construct()
    {
        $this->data = (new CommonModel())->prepareToasterData();
        $this->data['menu'] = 'navDashboard';
        $this->data['submenu'] = 'itemDashboard';
        helper('Currency_helper');
    }

    function fBoardDashboard()
    {
        $this->data['aInvoiceData'] = (new Master_model())->getRecords('inv_invoice_master', ['deleted' => 0],false,['id'=>"DESC"],false);
        $this->data['aQuotationData'] = (new Master_model())->getRecords('inv_quotation_master', ['deleted' => 0],false,['id'=>"DESC"],false);
        $this->data['aPOData'] = (new Master_model())->getRecords('inv_po_master', ['deleted' => 0],false,['id'=>"DESC"],false);
        return view('dashboard/index', $this->data);
    }
}
