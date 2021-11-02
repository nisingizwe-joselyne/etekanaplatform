<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    protected $table='chapters';
    protected $primaryKey='id';
    protected $fillable=['course_id', 'chapter'];

    public function course(){
        return $this->belongsTo(course::class);
    }
}
