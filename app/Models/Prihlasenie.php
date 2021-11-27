<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prihlasenie extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prihlasenie';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['meno', 'score'];


}

