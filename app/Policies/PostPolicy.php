<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

        /**
        *@return bool
        */
    }
    public function create(){

      return true;

    }

    /**
     * @param User $user
     * @param Post $posts
     * @return bool
     */
    public function update(User $user,Post $post){
        return $user->id == $post->user_id;

    }
//削除

    /**
     * @param User $user
     * @param Post $posts
     * @return bool
     */
    public function delete(User $user,Post $post){

      return $user->id == $post->user_id;
    }
}
