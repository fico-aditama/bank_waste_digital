<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   protected $fillable = [
    'name',
    'email',
    'password',
    'role',
    'foto'
   ];

   protected $hidden = [
    'password'
   ];

   protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
   ];

   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
