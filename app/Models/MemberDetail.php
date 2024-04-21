<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDetail extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }
    public function selection()
    {
        return $this->belongsTo(Selection::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
