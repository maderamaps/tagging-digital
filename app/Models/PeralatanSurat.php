<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeralatanSurat extends Model
{
    use HasFactory;
    protected $table = 'peralatan_surat';
    protected $fillable = ['file'];
    public $timestamps = false;
}
