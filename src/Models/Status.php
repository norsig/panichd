<?php

namespace PanicHD\PanicHD\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'panichd_statuses';

    protected $fillable = ['name', 'color'];

    /**
     * Indicates that this model should not be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get related tickets.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('PanicHD\PanicHD\Models\Ticket', 'status_id');
    }
	
	/**
     * Get related closing reasons.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function closingReasons()
    {
        return $this->hasMany('PanicHD\PanicHD\Models\Closingreason', 'status_id');
    }
}
