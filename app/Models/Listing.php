<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $gurded = [];

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }
}