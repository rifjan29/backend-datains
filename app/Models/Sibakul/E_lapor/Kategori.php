<?php

namespace App\Models\Sibakul\E_lapor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "elapor_kategori";
    protected $fillable =['nama','jmlkeluhan','jmlterbalas','jmlbelumterbalas','jmlontime','jmllateresponse'];
}