<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keywordgroup extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'keywordgroups';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function keywords()
    {
        return $this->hasMany('\App\Keyword');
    }

}