<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function user()
{
    return $this->belongsTo(User::class);

}
public function selection()
{
    return $this->belongsTo(Selection::class);

}
public function memberdetail()
{
    return $this->hasMany(memberdetail::class,'id','member_id');
}
}
