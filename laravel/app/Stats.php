<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model {
      
  public $timestamps = false;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'stats';
  
  protected $fillable = ['firstName', 'lastName', 'time', 'duration', 'description'];
  
}