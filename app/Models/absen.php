<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function member(){
        return $this->hasOne(member::class,'Member_qode','member_id');
    }
}
