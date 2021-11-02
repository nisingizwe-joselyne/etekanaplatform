<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $primaryKey='id';
    protected $fillable=['course', 'intro', 'requirements'];

    public function posts(){
        return $this->hasMany(post::class);
    }
}
