<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueryForm extends Model
{
    use HasFactory;

    protected $table = 'query_forms';

    protected $fillable =  [
        'first_name','last_name','phone','email','message'
    ];
}
