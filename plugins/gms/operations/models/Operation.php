<?php namespace Gms\Operations\Models;

use Model;

/**
 * Operation Model
 */
class Operation extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_operations_operations';

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
        'before_img' => 'System\Models\File',
        'after_img' => 'System\Models\File',
    ];
    public $attachMany = [];
}
