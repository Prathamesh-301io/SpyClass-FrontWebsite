<?php

namespace App\Models;

use CodeIgniter\Model;

class QuotationModel extends Model
{
    protected $table = 'inv_quotation_master';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['invoice_no', 'sender_comp_name', 'receiver_comp_name', 'invoice_date', 'due_date', 'total_payable','deleted'];
}
