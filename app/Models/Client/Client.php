<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
use Spatie\Permission\Traits\HasRoles;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $guard = 'client';

    // protected static function booted()
    // {
    //     static::creating(function ($client) {
    //         $client->user_type = $client->user_type ?? 'job_seeker';
    //         $client->client_type = $client->client_type ?? 'online';
    //     });
    // }

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
