<?php namespace Gms\Science\Models;

use Model;

/**
 * Science Model
 */
class Science extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_science_sciences';

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
    public $belongsToMany = [
        'video_in_science' => [
          'Gms\Blog\Models\Video',
          'table' => 'gms_science_key',
          'order' => 'id'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image_science' => 'System\Models\File',
    ];
    public $attachMany = [];
}
