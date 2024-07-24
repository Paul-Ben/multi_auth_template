<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicationId',
        'firstName',
        'middleName',
        'lastName',
        'email',
        'phoneNumber',
        'address',
        'gender',
        'maritalStatus',
        'nationality',
        'stateOfOrigin',
        'lga',
        'courseAppliedFor',
        'dateOfBirth',
        'nextOfKin',
        'nextOfKinPhoneNumber',
        'nextOfKinAddress',
        'applicationStatus',
        'olevel',
        'alevel',
        'jamb',
    ];
}
