<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'logo', 'workfile','study','startdate'
    ];
    
    public function Project()
    {
        return $this->belongsTo('App\Project');
    }
}
