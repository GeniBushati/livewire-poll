<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model
{

    protected $listeners = [
        'pollCreated'=>'render'
    ];

    use HasFactory;

    protected $fillable = ['title'];

    public function options():HasMany{
        return $this->hasMany(Option::class);
    }
}
