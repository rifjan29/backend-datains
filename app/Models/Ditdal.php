<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ditdal extends Model
{
    use HasFactory;
    
    /**
    * The connection attribute from config/database.php
    *
    * @var string
    */
   protected $connection= 'ditdal';
   protected $table = "";
   protected $fillable =[''];use HasFactory;
}
