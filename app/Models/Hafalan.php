<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Hafalan extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'hafalan';
    protected $primaryKey = 'id_hafalan';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['NIS','no_guru','jenis','tanggal'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function siswa()
    {
        return $this->belongsTo('App\Models\Siswa', 'NIS');
    }
    public function guru()
    {
        return $this->belongsTo('App\Models\Guru', 'no_guru');
    }
    public function surah()
    {
        return $this->belongsToMany('App\Models\Surah');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}