<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use HasFactory;
    use HasFactory;
    protected $table = 'contacts';
    protected $guarded = [];
    protected $appends = ['name', 'message','type_name'];

    public function getNameAttribute()
    {
        if(app()->getLocale() == 'ar'){
            return $this->name_ar;
        }else{
            return $this->name_en;
        }
    }
    public function getTypeNameAttribute()
    {
        if ($this->type == 1){
            return __('common.suggestions');
        }else if($this->type == 2){
            return __('common.complaints');
        }else{
            return __('common.Other');
        }
    }

    public function getMessageAttribute()
    {
        if(app()->getLocale() == 'ar'){
            return $this->message_ar;
        }else{
            return $this->message_en;
        }
    }
}
