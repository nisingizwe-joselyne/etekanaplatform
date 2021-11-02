<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $primaryKey='id';
    protected $fillable=['author_id', 'category_id', 'photo', 'title', 'post', 'views'];

    public function author(){
        return $this->belongsTo(author::class);
    }

    public function category(){
        return $this->belongsTo(category::class);
    }
}
