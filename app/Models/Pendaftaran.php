<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/pendaftaran/' . $value),
        );
    }

    /**
     * getCreatedAtAttribute
     *
     * @param  mixed $date
     * @return void
     */
    protected function createdAt(): Attribute
    {   
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y'),
        );
    }

}


