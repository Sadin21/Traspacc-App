<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable = ([
        'nama_jabatan',
    ]);

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id_position', 'id');
    }
}
