<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidIndividuals extends Model
{
    protected $table = 'bid_individuals_tbl';
    public $primaryKey = 'bid_ind_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'ind_id'
    ];
}
