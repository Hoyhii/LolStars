<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    public function league(){
        return $this->belongsTo(League::class);
    }
    protected $fillable = [
        'league_id',
        'name',
        'shortname',
        'country'
    ];
}
