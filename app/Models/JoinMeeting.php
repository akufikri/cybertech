<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinMeeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'meeting_id',
        'token_meeting',
        'user_id'
    ];
    protected $table = 'join_meetings';

    public function meeting()
    {
        return $this->belongsTo(Meeting::class, 'meeting_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}