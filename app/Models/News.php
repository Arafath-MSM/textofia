<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title', 
        'slug', 
        'excerpt', 
        'body',
        'meta_title',    
        'meta_description',  
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function previousPost(){
        return  News::where('id', '<', $this->id)->orderBy('id','desc')->first();
    }

    public function nextPost(){
        return News::where('id', '>', $this->id)->orderBy('id')->first();
    }
}
