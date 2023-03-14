<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'description', 'image', 'user_id'];


    public function getDescriptionAttribute()
    {
        return \DB::table('blog_posts')->where('id', $this->id)->value('description');
    }
}
