<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function articles() 
    {
        return $this->hasMany(Article::class);
    }
}
