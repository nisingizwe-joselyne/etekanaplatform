<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class broadcast extends Model
{
    use HasFactory;
    protected $table='broadcasts';
    protected $primaryKey='id';
    protected $fillable=['author_id', 'subject', 'message'];

    public function author(){
        return $this->belongsTo(author::class);
    }
}
