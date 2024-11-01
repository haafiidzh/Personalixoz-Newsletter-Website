<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fullname',
        'gender',
        'place_birth',
        'date_birth',
        'address',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
