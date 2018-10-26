<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidApproach extends Model
{
    protected $table = 'bid_approach_tbl';
    public $primaryKey = 'bid_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'comments_on_constratints',
        'comments_images',
        'solutions',
        'solutions_images'
    ];
}
