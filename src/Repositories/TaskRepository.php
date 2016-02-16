<?php
namespace mysharemodel\Repositories;

use mysharemodel\Model\Task;
use mysharemodel\Model\User;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function getTaskByUserID($user)
    {
        return Task::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
