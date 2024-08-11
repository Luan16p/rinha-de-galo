<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batalha extends Model
{
    use HasFactory;

    protected $table = "batalhas";

    protected $fillable = [
        'id_ring',
        'id_rooster_player_1',
        'id_rooster_player_2',
    ];

    public function roosterPlayer1() {
        return $this->belongsTo(Rooster::class, 'id_rooster_player_1');
    }
    
    public function roosterPlayer2() {
        return $this->belongsTo(Rooster::class, 'id_rooster_player_2');
    }

    public function ring() {
        return $this->belongsTo(Arena::class, 'id_ring');
    }
}