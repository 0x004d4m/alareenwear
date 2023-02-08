<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use CrudTrait, HasFactory, HasTranslations, SoftDeletes;

    protected $table = 'services';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
    protected $translatable = [
        'title',
        'description',
    ];
}
