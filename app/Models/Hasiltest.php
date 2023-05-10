<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasiltest extends Model
{
    use HasFactory;

    public function calon()
    {
        return $this->belongsTo(Calon::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
