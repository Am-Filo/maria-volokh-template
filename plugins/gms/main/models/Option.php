<?php namespace Gms\Main\Models;

use Model;

/**
 * Option Model
 */
class Option extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_main_options';

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
        'links_in_option' => [
          'Gms\Main\Models\Socialoption',
          'table' => 'gms_option_link_key',
          'order' => 'id'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image_profile' => ['System\Models\File'],
    ];
    public $attachMany = [];
}
