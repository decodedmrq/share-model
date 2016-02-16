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
    public function getTasksByUserID($user)
    {
        return Task::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }

    /**
     * create new Task 
     * @param array $data
     * @return mixed
     */
    public function create(array $data) {
        $task = new Task;
        $task->user_id = $data[0];
        $task->name = $data[1];
        return $task->save();
    }

    /**
     * Destroy task by id of task
     * @param $id
     * @return mixed
     */
    public function deleteTaskByID($id) {
        return Task::destroy($id);
    }
}
