<?php
class FileHelper
{

    public static function fileToArray($fname = "")
    {
        $file = PATH . "/" . $fname;
        if (file_exists($file) === false) {
            return [];
        }
        $json        = file_get_contents(PATH . "/" . $fname);
        $json_decode = json_decode($json, true);

        if ($json_decode == null) {
            return [];
        }

        return $json_decode;

    }

    public static function arrayToFile($array, $fname = "")
    {
        $json = json_encode($array);
        file_put_contents(PATH . "/" . $fname, $json);
    }
}