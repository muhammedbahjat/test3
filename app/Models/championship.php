<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class championship extends Model
{
    protected $casts = [
        'other_services' => 'array',
        'condition' => 'array',
        'awards' => 'array',
    ];
    protected $fillable = ['name'];
    use HasFactory;
    public function teams(){
        return $this->belongsToMany('App\Models\team','champ_team','champ_id','team_id');
    }
    public function players(){
        $relation = $this->belongsToMany('App\Models\player','goals','champ_id','player_id')->withPivot('player_id');



    return $relation;
    }

    
}
