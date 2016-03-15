<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatsView extends Model {
      
  public $timestamps = false;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'statsview';
  
  protected $fillable = ['lastName', 'timeSpentS', 'timeSpentH'];
  
}