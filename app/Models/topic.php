<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;
    protected $table='topics';
    protected $primaryKey='id';
    protected $fillable=['author_id', 'course_id', 'url', 'topic', 'powerpoint', 'description', 'views'];

    public function author(){
        return $this->belongsTo(author::class);
    }

    public function course(){
        return $this->belongsTo(course::class);
    }
}
