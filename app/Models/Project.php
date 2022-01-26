<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable =  [
        'title','slug','description','image','service_id','status','date','client','website'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
