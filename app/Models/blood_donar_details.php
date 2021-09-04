<?php

namespace App\Models;

use CodeIgniter\Model;

class BloodDonarDetailsModel extends Model
{
    protected $table      = 'blood_donar_details';
    protected $primaryKey = 'nic_passport';
    protected $useAutoIncrement = false;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nic_passport', 'full_name', 'phone_number', 'email_address', 'address','blood_type','requirements','additional_information','last_updated_on','status'];
    protected $useTimestamps = false;
    protected $skipValidation     = true;
    // ...
}