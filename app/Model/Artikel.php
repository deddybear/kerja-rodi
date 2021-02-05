<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model {
    //* Konfigurasi Database
    protected $table      = 'tbl_artikel';
    protected $primaryKey = 'id_artikel';
    protected $keyType    = 'string';
    public $incrementing  = false;
    
}
