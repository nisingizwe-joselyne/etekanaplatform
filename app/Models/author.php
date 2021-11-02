<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $table='authors';
    protected $primaryKey='id';
    protected $fillable=['first_name', 'last_name', 'email', 'phone'];

    public function posts(){
        return $this->hasMany(post::class);
    }

    public function videos(){
        return $this->hasMany(video::class);
    }

    public function broadcasts(){
        return $this->hasMany(broadcast::class);
    }
}
