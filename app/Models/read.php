<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class read extends Model
{
    use HasFactory;
    protected $table='reads';
    protected $primaryKey='id';
    protected $fillable=['author_id', 'chapter_id', 'video_url', 'attached_file', 
    'description', 'views'];

    public function author(){
        return $this->belongsTo(author::class);
    }

    public function chapter(){
        return $this->belongsTo(chapter::class);
    }
}
