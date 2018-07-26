<?php
/**
 * Created by PhpStorm.
 * User: zzgh
 * Date: 21.07.18
 * Time: 12:01
 */

class FileAction
{
    function __construct ($uniq_title_file,$FileUpload,$Jwt, $file)
    {
        $uploadFile = shell_exec("curl -X POST \
  $FileUpload \
  -H 'Authorization: $Jwt' \
  -F 'title=$uniq_title_file' \
  -F 'file=$file' \
  -F 'csvDelimiter=\'");
        return $uploadFile;
    }
}