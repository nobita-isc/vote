<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoteResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vote_result';
    protected $fillable = array('name', 'email', 'ocs', 'pam', 'rc', 'clt', 'vt', 'clc', 'htp');
}
