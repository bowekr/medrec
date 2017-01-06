<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'records';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['patient_id', 'doctor_id', 'keluhan', 'diagnosa', 'kadar_asam', 'tekanan_darah', 'kadar_gula', 'penanganan'];

    
}
