<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sibakul extends Model
{
    use HasFactory;

    /**
     * The connection attribute from config/database.php
     *
     * @var string
     */
    protected $connection= 'sibakul';
}
