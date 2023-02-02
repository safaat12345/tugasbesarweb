<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table ="orders";
    protected $guarded = ['id'];

// coffe
    public function coffes()
    {
        return $this->belongsTo(coffe::class);
    }

// bland
    public function blands()
    {
        return $this->belongsTo(bland::class);
    }
    
// bvrages
    public function bvrages()
    {
        return $this->belongsTo(bvrages::class);
    }
}
