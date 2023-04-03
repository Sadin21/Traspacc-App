<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ([
        'image',
        'nip',
        'nama',
        'alamat',
        'no_telp',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'jenis_kelamin',
        'eselon',
        'npwp',
        'id_position',
        'id_position_class',
        'id_work_unit',
    ]);

    public function position()
    {
        return $this->belongsTo(Position::class, 'id_position', 'id');
    }

    public function position_class()
    {
        return $this->belongsTo(PositionClass::class, 'id_position_class', 'id');
    }

    public function work_unit()
    {
        return $this->belongsTo(WorkUnit::class, 'id_work_unit', 'id');
    }
}
