<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'id_job';

    protected $fillable = [
        'name',
    ];
    /**
     * Get all workers with the job.
     */
    public function workers()
    {
        return $this->hasMany('App\Worker', 'id_job');
    }


}
