<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absens extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'meeting_id',
        'states',
        'optional'
    ];
    protected $table = 'absens';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function meeting()
    {
        return $this->belongsTo(Meeting::class, 'meeting_id');
    }
}
