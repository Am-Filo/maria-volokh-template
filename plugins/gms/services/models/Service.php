<?php namespace Gms\Services\Models;

use Model;

/**
 * Service Model
 */
class Service extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'gms_services_services';

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
        'operations_in_service' => [
          'Gms\Operations\Models\Operation',
          'table' => 'gms_services_key',
          'order' => 'id'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'service_img' => 'System\Models\File',
    ];
    public $attachMany = [];
}
