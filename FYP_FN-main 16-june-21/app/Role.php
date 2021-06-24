<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $casts = [
        'options' => 'array',
    ];


    public function role(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
       return  $this->belongsToMany(User::class);
    }
}
