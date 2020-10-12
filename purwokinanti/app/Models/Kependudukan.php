<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'born', 'gender', 'nik', 'status', 'job', 'education', 'keluarga_id', 'address'];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }
    public function kekeluargaan()
    {
        return $this->hasMany(Keluarga::class);
    }
    public function insert()
    {
        request()->validate([
            'name' => 'required',
            'born' => 'required|date',
            'gender' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
        ]);
    }
}
