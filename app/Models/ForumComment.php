<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function author(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
