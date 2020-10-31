<?php namespace Gms\Main\Models;

use Model;

/**
 * Socialoption Model
 */
class Socialoption extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_main_socialoptions';

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
    public $attachOne = [];
    public $attachMany = [];
}
