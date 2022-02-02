<?php

namespace App\Models;

use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [

        'city',
        'street'
    ];

    public function user(){

        return $this->belongsTo(User::class,'user_id');
    }
}
