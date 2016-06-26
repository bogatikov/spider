<?php

namespace spider;


use models\TasksModel;

class Worker
{
    public $taskId;

    /*
     * Директория в которой искать. (Относительно главной директории )
     */
    public $path;

    public $mask;

    /*
     * Массив с названием файлов в директории
     */
    public $files = [];

    public function __construct($id)
    {
        $this->taskId = $id;
        $task = TasksModel::findOneByPk($id);
        $this->path = __DIR__ . '/../' . $task->path;
        $this->mask = $task->mask;
        $this->loadFiles($this->path);
    }

    public function start()
    {
        foreach($this->files as $file) {
            if (preg_match('/^' . __DIR__ . '\/' . $this->path . '\/' . $this->mask . '$/', $file)) {
                unset($file);
            }
        }
    }

    private function sendLog($text)
    {
        file_put_contents(__DIR__ . '/../logs.txt', $text . "\r\n", FILE_APPEND);
    }
    /*
     * Loads files from dir
     */
    private function loadFiles($dir)
    {
        if (is_dir($dir)) {
            $files = scandir($dir);
            $files = array_diff($files, array('.', '..'));
            foreach ($files as $file) {
                if (is_dir($dir . '/' . $file)) {
                    $this->loadFiles($dir . '/'. $file);
                } else {
                    $path = $dir . '/' .$file;
                    $this->files[] = $path;
                }
            }
        }
    }
}