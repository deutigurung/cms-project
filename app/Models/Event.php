<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable =  [
        'title','description','status','date','cost','image','available_tickets','organizer','organizer_email','time',
        'organizer_website','organizer_phone','slug','venue_location','venue_phone'
    ];
}
