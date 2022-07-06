<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ditops extends Model
{
    use HasFactory;
    
    /**
    * The connection attribute from config/database.php
    *
    * @var string
    */
   protected $connection= 'ditops';
   protected $table = "";
   protected $fillable =[''];use HasFactory;
}
