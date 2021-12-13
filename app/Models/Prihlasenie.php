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
    /*
     * tabulka v databáze (komunikuje s databázou)*/
    protected $table = 'prihlasenie';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     * premenné v tabulke prohlásenie*/
    protected $fillable = ['meno', 'score'];


}

