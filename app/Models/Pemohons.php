<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohons extends Model
{
    use HasFactory;
    protected $primaryKey = 'pemohon_id';
    public $incrementing = false;
}
