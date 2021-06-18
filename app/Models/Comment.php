<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $primary_key = 'id';

    protected $fillable = ['post_id', 'comment_content'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
