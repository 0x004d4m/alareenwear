<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Counter extends Model
{
    use CrudTrait, HasFactory, HasTranslations, SoftDeletes;

    protected $table = 'counters';
    protected $guarded = ['id'];
    protected $fillable = [
        'counter1',
        'counter1Name',
        'counter2',
        'counter2Name',
        'counter3',
        'counter3Name',
        'counter4',
        'counter4Name',
    ];
    protected $translatable = [
        'counter1Name',
        'counter2Name',
        'counter3Name',
        'counter4Name',
    ];
}
