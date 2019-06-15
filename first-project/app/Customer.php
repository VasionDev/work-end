<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Customer extends Model
{
    protected $guarded = [];
    public function scopeActive($query){
        return $query->where('status', 1);
    }

    public function scopeInactive($query){
        return $query->where('status', 0);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function getStatusAttribute($attribute){
        return [
            1=> 'Active',
            0=> 'Inactive'
        ][$attribute];
    }
}
