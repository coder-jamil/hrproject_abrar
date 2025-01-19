<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{   use HasFactory;
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        
        'user_id',
        'designation_id',
        'department_id',
        'country_id',
        'language_id',
        'mobile',
        'address',
        'about',
        
       
    ];
}
