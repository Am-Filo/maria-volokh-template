<?php namespace Gms\Services\Models;

use Model;

/**
 * Stage Model
 */
class Stage extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_services_stages';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'stage_img' => 'System\Models\File',
    ];
    public $attachMany = [];
}
