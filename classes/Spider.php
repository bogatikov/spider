<?php

namespace classes;


use models\TasksModel;

class Spider
{
    public function parseCommand(Array $command)
    {
        if($command[1] == '--add') {
            if (file_exists($command[2]) && is_dir($command[2])) {
                $tasks = new TasksModel();
                $tasks->path = $command[2];
                $tasks->mask = $command[3];
                $tasks->save();
            } else {
                throw new \Exception('Unknown dir', 1);
            }
        } else {
            throw new \Exception('Unknown command', 1);
        }
    }
    public function worker($id)
    {
        $task = TasksModel::findOneByPk($id);

    }
}