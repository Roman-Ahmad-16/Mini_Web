<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(SerivceCategory::class, 'category_id');
    }
}
