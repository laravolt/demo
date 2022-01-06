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

        static::updating(function (Model $model) {
            $model->writer_id = auth()->id();
        });
    }

}
