<?php

namespace App\Models;

use App\Models\Supervisor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Selection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'class_name',
        'supervisor_id',
    ];
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
    public function member(){
        return $this->hasMany(Member::class);
    }

    public function memberdetail()
    {
        return $this->hasMany(MemberDetail::class);
    }
}
