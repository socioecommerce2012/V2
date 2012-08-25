<?php

interface I_FileIOOperations {

    public function DoesFileExists($fileName);

    public function SetFilePropertiesAvailable();

    public function OpenFile();

    public function ReadFileOnly();

    public function WriteFileOnly();

    public function ReadAndWriteAppendEndFile();

    public function WriteOnlyAppendEndFile();

    public function CreateFile();

    public function DeleteFile();

    public function TruncateFile();

    public function ReadFileAsString();
}

?>
