<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
    use HasFactory;
    protected function CreatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date('d-m-Y', strtotime($this->attributes['created_at'])),
        );
    }

    protected function UpdatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date('d-m-Y', strtotime($this->attributes['created_at'])),
        );
    }
}
