<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummonerName extends Model
{
    use HasFactory;

    protected $table = 'summoner_names';
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $visible = [
        'id',
        'user_id',
        'summoner_name',
        'region',
    ];
    protected $fillable = [
        'user_id',
        'summoner_name',
        'region',
    ];
}
