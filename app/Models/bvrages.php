<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bvrages extends Model
{
    use HasFactory;
    protected $table ="bvrages";
    protected $guarded = ['id'];
    
    public function orders()
    {
        return $this->hasMany(orders::class);
    }
}
