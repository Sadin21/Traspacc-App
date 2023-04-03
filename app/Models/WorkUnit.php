<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkUnit extends Model
{
    use HasFactory;
    protected $fillable = ([
        'unit_kerja',
        'alamat'
    ]);

    public function employee()
    {
        return $this->hasMany(Employee::class, 'id_work_unit', 'id');
    }
}
