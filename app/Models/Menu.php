<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable =  [
        'title','parent_id','url'
    ];

    public function childs() {
        return $this->hasMany(Menu::class,'parent_id','id') ;
    }
}
