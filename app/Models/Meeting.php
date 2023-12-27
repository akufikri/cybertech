<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'time',
        'location',
        'author_id',
        'token_meeting'
    ];

    protected $table = 'meetings';

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
