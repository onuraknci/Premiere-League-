<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strength extends Model
{
    use HasFactory;
    public function getData() {
    this->hasMany('App\Models\Team', 'team_id', 'id',  'average');
    }
  protected $fillable = [
      'name','average', 'points' , 'table_status',
      'stadium','last_game', 'team_id'
  ] ;
}
