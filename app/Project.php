<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'logo', 'workfile','study','startdate'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Quotation()
    {
        return $this->hasOne('App\Quotation');
    }
}
