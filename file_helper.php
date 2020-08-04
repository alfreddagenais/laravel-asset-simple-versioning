<?php

function checkFolderPath(string $path): string
{
    return str_replace(array('//', '///', '////', '/////', '//////', '///////', '////////'), '/', $path);
}

function assetVersion(string $path): string
{

    $publicFolder = env('APP_FOLDER_PUBLIC', '');
    if (empty($publicFolder)) {
        return asset($path);
    }

    $filePath = checkFolderPath("{$publicFolder}/{$path}");
    if (!file_exists($filePath)) {
        return asset($path);
    }

    $filemtime = filemtime($filePath);
    $ext = pathinfo($filePath, PATHINFO_EXTENSION);

    return asset(str_replace(".{$ext}", "-{$filemtime}.{$ext}", $path));
}
