<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooster extends Model
{
    use HasFactory;

    protected $table = "roosters";

    protected $fillable = [
        'name',
        'strength',
        'defense',
        'agility',
        'id_rooster_owner',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'id_rooster_owner');
    }
}
