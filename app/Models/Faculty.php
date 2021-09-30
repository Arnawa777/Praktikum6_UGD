<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_fakultas'
    ];
}
