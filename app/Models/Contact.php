<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $primaryKey = 'con_id';
    protected $fillable = ['con_name','con_phone_number','con_email','con_age','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
