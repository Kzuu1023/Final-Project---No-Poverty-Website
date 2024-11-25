<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribeUser extends Model
{
    use HasFactory;
    
    protected $table = 'subscriber_users';

        // Specify the fields that are mass assignable (optional)
        protected $fillable = [
            'fname',
            'lname',
            'email',
        ];
}
