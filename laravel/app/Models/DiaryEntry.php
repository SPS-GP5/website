<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaryEntry extends Model {
      
  public $timestamps = true;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'diaryentries';
  
}