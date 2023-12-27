<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'divisi_name'
    ];

    protected $table = 'divisis';

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
