<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $guarded = [];
    protected $appends = ['type_text'];

    public function getTypeTextAttribute()
    {
        if ($this->type == 1){
            return __('common.Financial');
        }else if($this->type == 2){
            return __('common.Administrative');
        }else if($this->type == 3){
            return __('common.Structural');
        }else if($this->type == 4){
            return __('common.Systems');
        }else if($this->type == 5){
            return __('common.Policies');
        }else if($this->type == 6){
            return __('common.Protocols');
        }else if($this->type == 7){
            return __('common.Evidence');
        }else{
            return __('common.Other');
        }
    }

    public function getFileAttribute($value)
    {
        return $value != null ? url('/files/') . '/' . $value : '';
    }
}
