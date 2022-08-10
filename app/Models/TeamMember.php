<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $table = 'team_members';

    protected $fillable =  [
        'title',
        'description',
        'photo',
        'status',
<<<<<<< HEAD
        'designation'
=======
        'designation','email','phone','address'
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
    ];
}
