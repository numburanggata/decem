<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risalah extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nama', 'file', 'gambar'
    ];
    protected $table = 'sop';// use HasFactory;
    protected $fillable = [
        'nama', 'file', 'gambar'
    ];
    protected $table = 'risalah';
}
