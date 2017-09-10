<?php

namespace Charlie;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'name',
        'birthdate',
        'city',
        'state',
        'special_customer',
    ];
    protected $casts = [
        'special_costumer' => 'boolean',
        'birthdate' => 'date',
    ];

    public function purchases(){
        return $this->hasMany(Purchases::class);
    }
}
