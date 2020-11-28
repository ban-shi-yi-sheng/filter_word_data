<?php

namespace FilterWordData;


class FilterFiles
{
    public static function AllFiles()
    {
        $dir = __DIR__ . "/data";
        $files = [];
        foreach (scandir($dir) as $file){
            if(! in_array($file, ['.', '..']) ){
                $files[] = $dir . '/' . $file;
            }
        }
        return $files;
    }
}
