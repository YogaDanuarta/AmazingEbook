<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'accounts';
    protected $primaryKey = 'account_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'account_id',
        'role_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender_id',
        'email',
        'password',
        'display_picture_link',
        'modified_at',
        'modified_by',
    ];

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function gender() {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    protected $hidden = [
        'password',
    ];

}
