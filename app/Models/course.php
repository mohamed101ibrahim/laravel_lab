<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'grade', 'instractor','grade','track_id'
    ];
    function track(){
        return $this->belongsTo(Track::class);
    }
}
