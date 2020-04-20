<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/*
 * @method string getAvatarAttribute
 *
 * */

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function timeline()
    {
        $ids = $this->follows()->pluck('id');
        $ids = $ids->push($this->attributes['id']);

        return Tweet::with('user')->whereIn('user_id', $ids)->latest()->get();
    }


    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }


    /**
     * Allows to follow another user.
     * @param User $user
     * @return Model
     */
    public function follow(User $user): Model
    {
        return $this->follows()->save($user);
    }


    /**
     * @return BelongsToMany
     */
    public function follows(): BelongsToMany
    {
        return $this->belongsToMany(__CLASS__, 'follows', 'user_id', 'following_user_id');
    }

    /**
     * Return the user avatar path
     * @return string
     */
    public function getAvatarAttribute(): string
    {
        return sprintf('https://i.pravatar.cc/50?u=%s', $this->attributes['email']);
    }


}
