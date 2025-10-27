<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SerivceCategory extends Model
{
    use SoftDeletes;

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
