<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function outputDetail() {
        return [
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
            "name" => "Name Test",
        ];
    }

    // public function outputDetail() {
    //     return [
    //         $this->name,
    //         $this->price_text,            
    //         $this->explain,    
    //         $this->release_flg_str,         
    //         $this->recommend_flg_str,       
    //         $this->created_at,
    //         $this->updated_at,
    //     ];
    // }

}
