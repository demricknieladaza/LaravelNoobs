<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidAdvise extends Model
{
    protected $table = "bid_advise_tbl";
    public $primaryKey = 'bid_advise_id';
    public $timestamps = false;
    protected $fillable = [
        'advise_one',
        'advise_two',
        'advise_three',
        'advise_four',
        'advise_five',
        'advise_six',
        'collab_one',
        'collab_two',
        'collab_three',
        'collab_four',
        'coordinate_one',
        'coordinate_two',
        'other_one',
        'other_two',
        'other_three',
        'other_four'
    ];
}
