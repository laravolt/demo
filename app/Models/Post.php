<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $fillable = ['title', 'content', 'thumbnail', 'topic_id', 'writer_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
                $model->writer_id = auth()->id();
        });

    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }

    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id','id');
    }

}
