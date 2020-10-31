<?php namespace Gms\Services\Models;

use Model;

/**
 * Team Model
 */
class Team extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_services_teams';

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
        'team_img' => 'System\Models\File',
    ];
    public $attachMany = [];
}
