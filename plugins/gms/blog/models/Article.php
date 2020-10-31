<?php namespace Gms\Blog\Models;

use Model;

/**
 * Article Model
 */
class Article extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_blog_articles';

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
        'video_in_article' => [
          'Gms\Blog\Models\Video',
          'table' => 'gms_blog_key',
          'order' => 'id'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image_article' => 'System\Models\File',
    ];
    public $attachMany = [];
}
