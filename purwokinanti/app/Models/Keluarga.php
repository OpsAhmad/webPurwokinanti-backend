<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = ['kependudukan_id', 'kb', 'ks', 'pus'];

    public function penduduk()
    {
        return $this->hasMany(Kependudukan::class);
    }
    public function kependudukan()
    {
        return $this->belongsTo(Kependudukan::class);
    }
}
