<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_member_1',
        'group_member_2',
        'group_member_3',
        'group_member_1_name',
        'group_member_2_name',
        'group_member_3_name',
        
    ];
    public function user()
{
    return $this->belongsTo(User::class);

}
public function selection()
{
    return $this->belongsTo(Selection::class);

}
public function member(){
    return $this->hasMany(Member::class);
}
public function memberdetail()
{
    return $this->hasMany(memberdetail::class,'id','member_id');
}
}
