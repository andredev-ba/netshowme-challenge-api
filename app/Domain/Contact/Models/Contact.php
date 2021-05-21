<?php

namespace Domain\Contact\Models;

class Contact
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'file_path'
    ];

}
