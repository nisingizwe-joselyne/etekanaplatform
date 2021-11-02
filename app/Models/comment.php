<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table='comments';
    protected $primaryKey='id';

    protected $fillable=['user_id', 'read_id', 'comment'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
