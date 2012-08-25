<?php

class FileIOOperations implements I_FileIOOperations {

    private $FileName;
    private $FileHandler;
    private $EnableLock;
    private $FilePath;

    public function __construct($fileName) {

        $this->FileName = $fileName;

        // Checks Whether User Has Given Absolute Path Or Just The file Name
        if ($this->DoesFileExists($this->FileName)) {
            $this->FilePath = $this->FileName;
        } else {
            $this->FilePath = FileUtility::SearchFile($this->FileName);
            if ($this->FilePath != null) {
                throw new Exception(FileExceptionTypes::$FileNotFoundForPath);
            }
        }
    }

    public function DoesFileExists($fileName) {
        return file_exists($fileName);
    }

    public function CreateFileByTruncatingData() {
        try {
            $this->OpenFile(FilePermissions::CREATE_OPEN_WRITE_ONLY);
        } catch (Exception $e) {
            PrintErrors::PrintStackTrace($e);
            throw new Exception(FileExceptionTypes::$FailedCreatingFile);
        }
    }

    public function SetFilePropertiesAvailable() {
        
    }

    public function OpenFile($mode) {
        try {
            $this->FileHandler = fopen($this->FilePath, $mode);
        } catch (Exception $e) {
            PrintErrors::PrintStackTrace($e);
            throw new Exception(FileExceptionTypes::$FailedOpeningFile);
        }
    }

    public function CloseFile() {
        try {
            fclose($this->FileHandler);
        } catch (Exception $e) {
            PrintErrors::PrintStackTrace($e);
            throw new Exception(FileExceptionTypes::$FailedClosingFile);
        }
    }

    public function DeleteFile() {
        
    }

    public function TruncateFile() {
        try {
            $this->FileHandler = $this->OpenFile(FilePermissions::WRITE_ONLY_CONTENTS_TRUNCATE);
            $this->CloseFile();
        } catch (Exception $e) {
            PrintErrors::PrintStackTrace($e);
            throw new Exception(FileExceptionTypes::$FailedTruncatingFile);
        }
    }

    public function ReadFileAsString() {
        
    }

    public function CreateFile() {
        
    }

    public function ReadAndWriteAppendEndFile() {
        
    }

    public function ReadFileOnly() {
        
    }

    public function WriteFileOnly() {
        
    }

    public function WriteOnlyAppendEndFile() {
        
    }

}

?>
