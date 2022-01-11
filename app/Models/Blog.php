<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable =  [
        'title','slug',
        'content',
        'image',
        'blog_category_id','status','tags'
    ];

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }
}
