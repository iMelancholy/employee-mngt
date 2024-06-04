<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employ extends Model
{
    use HasFactory;
    protected $table='employ';
    protected $primarykey='id';
    protected $fillable= ['ID', 'firstname', 'lastname',	'phone', 'dob'];
}
