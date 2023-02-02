<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffe extends Model
{
    use HasFactory;
    protected $table ="coffes";
    protected $guarded = ['id'];
    
    public function orders()
    {
        return $this->hasMany(orders::class);
    }
}
