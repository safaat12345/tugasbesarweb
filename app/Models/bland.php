<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bland extends Model
{
    use HasFactory;
    protected $table ="blands";
    protected $guarded = ['id'];
    
    public function orders()
    {
        return $this->hasMany(orders::class);
    }
}
