<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BCategory extends Model
{
    use SoftDeletes;

    public function blogs()
{
    return $this->hasMany(Blog::class, 'category_id' , 'id');
}

}
