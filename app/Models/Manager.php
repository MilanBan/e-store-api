<?php

namespace App\Models;

use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manager extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function store() 
    {
        return $this->hasOne(Store::class);
    }
}
