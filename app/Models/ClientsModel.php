<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model
{
    protected $table = 'inv_clients';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['company_name', 'company_email', 'address', 'company_gstin', 'city', 'state', 'zipcode', 'created_at', 'updated_at', 'is_active'];
}
