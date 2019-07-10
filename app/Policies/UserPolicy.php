<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy {
    use HandlesAuthorization;

    /**
     * 当前用户只能更新自己的用户信息
     * @param User $currentUser
     * @param User $user
     * @return bool
     */
    public function update(User $currentUser, User $user) {
        return $currentUser->id === $user->id;
    }

    /**
     * 当前用户不能删除自己
     * @param User $currentUser
     * @param User $user
     * @return bool
     */
    public function destroy(User $currentUser, User $user) {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }

    /**
     * 当前用户不能关注自己
     * @param User $currentUser
     * @param User $user
     * @return bool
     */
    public function follow(User $currentUser, User $user) {
        return $currentUser->id !== $user->id;
    }

}
