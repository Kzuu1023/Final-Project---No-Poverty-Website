<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DonationUser extends Model
{
    use HasFactory;
    
    protected $table = 'donation_users';

        // Specify the fields that are mass assignable (optional)
        protected $fillable = [
            'fullname',
            'phone_number',
            'email',
            'donation_amount',
            'date',
            'message',
        ];
}
