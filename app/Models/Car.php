<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model{

  use HasFactory;

  protected $fillable =
  [
'make',
'model',
'description',
'price',
'img_url',
'year',
'is_published',
  ];

}

