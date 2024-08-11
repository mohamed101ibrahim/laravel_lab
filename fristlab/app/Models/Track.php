<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
      protected $table="track";
      protected $fillable=['name','grade','Number_of_courses','Number_of_Students','logo'];

}
