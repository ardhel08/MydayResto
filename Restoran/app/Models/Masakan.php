<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Masakan extends Model
{
    use HasFactory;
    protected $table = 'masakan';
    protected $primaryKey = 'id_masakan';
}
