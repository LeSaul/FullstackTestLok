<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected function phone(): Attribute
    {
        return new Attribute(
            get: function ($value){
                $value = preg_replace('/\D/', '', $value);

                switch (strlen($value)) {
                    case 10:
                        return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $value);
                        break;
                    case 11:
                        return preg_replace("/([0-9]{1})([0-9]{3})([0-9]{3})([0-9]{4})/", "$1($2) $3-$4", $value);
                        break;
                    default:
                        $value;
                        break;
                }
            }
                
        );
    }
}
