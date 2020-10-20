<?php

namespace App\Models;
use App\Models\BloodRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;

    protected $table = 'blood_request';

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'blood_type',
        'num_of_bottles',
        'location'
    ];

}
