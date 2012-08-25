<?php

class FileUtility {

    public static function GetAllDirectoriesNames() {
        
    }

    public static function SearchFile($fileName) {
        $StackDirToBeSearched = FileSystemConstants::$ARRAY_DRIVES;
        $filePath = null;
        foreach ($StackDirToBeSearched as $Directory) {
            $RealPathForDirectory = realpath($Directory);
            $filePath = $RealPathForDirectory . "/" . $fileName ;
            if(file_exists($filePath)){
                return $filePath;
            }
            $FilesDirsList = scandir($RealPathForDirectory);
            foreach ($FilesDirsList AS $FileOrDrive){
                if(is_dir($FileOrDrive)){
                    array_push($StackDirToBeSearched, $FileOrDrive);
                }
            }
        }
    }

    public static function GetFileSystemDrives() {
        
    }

    public static function GetAllFileNamesWithExtension() {
        
    }

    public static function ChangeFileGroup() {
        
    }

    public static function ChangeFileMode() {
        
    }

    public static function ChangeFileOwner() {
        
    }

    public static function DeleteFile() {
        
    }

    public static function IsFileReadable() {
        
    }

    public static function IsFileWriteable() {
        
    }

    public static function FilesWithMatchingWords() {
        
    }

    public static function CreateDirectory() {
        
    }

    public static function DeleteDirectory() {
        
    }

    public static function TouchFile() {
        
    }

}

?>
