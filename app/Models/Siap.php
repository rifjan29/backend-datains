<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siap extends Model
{
    use HasFactory;/**
     * The connection attribute from config/database.php
     *
     * @var string
     */
    protected $connection= 'siap';
    protected $table = "";
    protected $fillable =[''];
}
