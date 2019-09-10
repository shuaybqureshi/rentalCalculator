<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report_info extends Model
{
    protected $table="report_info";
    protected $fillable = [
        'title', 'address', 'mls','city', 'postal',
    ];

    public function purchase_info()
    {
        return $this->hasOne('App\purchase_info','report_id');
    }
    public function growth()
    {
        return $this->hasOne('App\growth','report_id');
    }
    public function exp_inc()
    {
        return $this->hasOne('App\exp_inc','report_id');
    }
}
