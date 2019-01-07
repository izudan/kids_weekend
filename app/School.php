<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $table = 'schools';
    
    protected $primarykey='school_id';
    
    protected $fillable = [
        'school_name_kana','school_name', 'school_email', 'school_hp','school_tel','school_state','school_city',
        'school_addres1','school_addres2','school_detail','school_bank_acount','school_bank_name','school_bank_branch_code',
        'school_bank_account_number','school_bank_accuont_type','school_bank_beneficiary_name'
    ];
    
    public function activities()
    {
        return $this->hasMany('\App\Activity');
    }
}