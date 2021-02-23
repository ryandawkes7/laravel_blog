<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * Mass assignable
     *
     * @var array
     */
    protected $fillable =  ['title', 'body'];

    /**
     * Has Many relationship
     *
     * @var array
     */
    public function commments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
