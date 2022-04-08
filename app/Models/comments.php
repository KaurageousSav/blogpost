<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = ['comment', "user_id", "blog_id"];

    public function comment()
    {
        return $this->belongsTo(comments::class);
    }
}
