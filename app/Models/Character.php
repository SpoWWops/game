<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\classes;

class character extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'characters';

    protected $fillable = array('name', 'class');

    public function classes()
    {
        return $this->belongsTo('App\Models\classes','class');
    }
}