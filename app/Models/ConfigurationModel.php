<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigurationModel extends Model
{
    protected $table = 'inv_configuration';
    protected $primaryKey = 'id';
    
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'gst',
        'cgst',
        'sgst',
        'is_active',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $dateFormat = 'datetime';
}
