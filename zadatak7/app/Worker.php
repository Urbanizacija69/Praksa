<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table="workers";

    protected $fillable = [
        'id_job',
        'firstname',
        'lastname',
        'email',
        'color',
        'salary',
        'birthday',
    ];
    /**
     * Get workers job.
     */
    public function job()
    {
        return $this->belongsTo('App\Job', 'id_job');
    }


}
