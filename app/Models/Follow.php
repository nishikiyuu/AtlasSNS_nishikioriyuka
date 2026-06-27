<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Follow extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'id',
            'following_id',
            'followed_id'
        ];

    public function FollowCount(User $user)
    {
        return $this->where('following_id', $user->id)->count();
    }

    public function FollowerCount(User $user)
    {
        return $this->where('followed_id', $user->id)->count();
    }

}
