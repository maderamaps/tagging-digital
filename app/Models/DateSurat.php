<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateSurat extends Model
{
    use HasFactory;
    protected $table = 'date_surat';
    protected $fillable = ['file'];
    public $timestamps = false;
}
