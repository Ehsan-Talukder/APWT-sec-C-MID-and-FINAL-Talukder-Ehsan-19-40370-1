<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivaryman extends Model
{
    use HasFactory;
    public function delivaryman(){
        return $this->hasMany(user::class,'delivarymanId');
    }
}
