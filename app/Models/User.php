<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'username',
        'email',
        'password',
        'bio',
        'icon_image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class,'following_id','followed_id')->withTimestamps();
    }

    public function relation(){
        $id = $this->id;
        $follow = $this->follows()->where('following_id', $id)->first();
        $follower = $this->follows()->where('followed_id', Auth::user()->id)->first();

        if(!($follow) && !($follower)){
            $result = 0;
        }elseif($follow && !($follower)){
            $result = 1;
        }elseif(!($follow) && $follower){
            $result = 2;
        }else{
            $result = 3;
        }

        //0->どちらもフォローしていない
        //1->相手をフォロー
        //2->フォローされている
        //3->相互フォロー

        return $result;

    }
}
