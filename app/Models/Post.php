<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name (Laravel uses "posts" by default)
    protected $table = 'posts';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'title', 'content',
    ];

    // If you're using timestamps (created_at, updated_at), this is set to true by default
    public $timestamps = true;
}