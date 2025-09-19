<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, BlogPost $post)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, BlogPost $post)
    {
        // if ($user->isAdmin === 1) {
        //     return true;
        // }
        // return $user->id === $post->user_id;
            if ($user->hasPermissionTo('edit post')) {
        return true;
    }
    return $user->id === $post->user_id;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, BlogPost $post)
    {
        // if ($user->isAdmin === 1) {
        //     return true;
        // }
        // return $user->id === $post->user_id;
         if ($user->hasPermissionTo('delete post')) {
        return true;
    }
    return $user->id === $post->user_id;

    }

    public function destroy(User $user, BlogPost $post)
    {
               // if ($user->isAdmin === 1) {
        //     return true;
        // }
        // return $user->id === $post->user_id;
        if ($user->hasPermissionTo('destroy post')) {
        return true;
    }
    return $user->id === $post->user_id;


    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, BlogPost $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, BlogPost $post)
    {
        //
    }
}
