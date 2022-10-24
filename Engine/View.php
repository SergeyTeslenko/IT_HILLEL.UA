<?php

namespace Engine;

use Exception;

class View
{
    /**
     * @throws Exception
     */
    public static function generate(string $path, array $data = []): void
    {
        $filePath = config('path.views') . $path . '.php';
        extract($data);
        if (file_exists($filePath)) {
            include $filePath;
            exit();
        } else {
            throw new \Exception('Templates ' . $filePath . ' absent');
        }
    }
}