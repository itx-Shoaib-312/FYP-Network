<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $table = 'supervisor';
    protected $fillable = [
        'name', 'designation', 'total_slots', 'available_slots', 'status'
    ];

    public function selections()
    {
        return $this->hasMany(Selection::class);
    }
}
