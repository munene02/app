<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $fillable = ['home_team', 'away_team','bet_type','tip','result','game_date','status'];


}
