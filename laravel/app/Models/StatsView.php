<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatsView extends Model {
      
  public $timestamps = false;

  protected $table = 'statsview';
  
  protected $fillable = ['lastName', 'timeSpentS', 'timeSpentH'];
  
}