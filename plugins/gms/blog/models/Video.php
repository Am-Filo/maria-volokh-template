<?php namespace Gms\Blog\Models;

use Model;

/**
 * Video Model
 */
class Video extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_blog_videos';

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
        'image_video' => 'System\Models\File',
    ];
    public $attachMany = [];
}
