<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function contact(){
        return $this->hasOne(Contact::class);
    }

    public function address(){
        return $this->hasOne(Address::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }
}
