<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionClass extends Model
{
    use HasFactory;
    protected $fillable = ([
        'nama_jabatan',
    ]);

    public function employee()
    {
        return $this->hasMany(Employee::class, 'id_position_class', 'id');
    }
}
