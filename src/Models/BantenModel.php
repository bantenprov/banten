<?php namespace Bantenprov\Banten\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The BantenModel class.
 *
 * @package Bantenprov\Banten
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class BantenModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'banten';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
