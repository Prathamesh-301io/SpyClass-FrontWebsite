<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table = 'inv_companies';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['company_name', 'company_email', 'contact_no', 'address', 'company_gstin','pan_no', 'city', 'state','state_code', 'zipcode', 'bank_name', 'acc_holder_name', 'account_number', 'ifsc_code', 'bank_branch', 'upi_id',  'created_at', 'updated_at', 'is_active'];
}
