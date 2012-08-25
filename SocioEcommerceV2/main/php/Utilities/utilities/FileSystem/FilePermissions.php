<?php

// ***********************************************************************************//
//                                                                                    //  
// File:	 CommentsStructure.php                                                //
// Project:	 SocioEcommerceV2                                                     //  
//                                                                                    //  
//                                                                                    //  
// Author:	Avinash Kodakandla                                                    //  
// Date:	August 23, 2012                                                       //  
// Description: This Page Gives the Comments Which Should Be Included in Every PHP    //
// Page                                                                               //  
//                                                                                    //  
// Change History:                                                                    //
// Name		Date			Version		Description                   //  
// -----------------------------------------------------------------------------------//
// Avinash Kodakandla	August 23, 2012		1.0		Created               //  
//                                                                                    //  
// -----------------------------------------------------------------------------------//
// Copyright (C) <copyright information of the client>.                               //  
// -----------------------------------------------------------------------------------//

class FilePermissions {
    //Allows only to read the files (READ ONLY)

    const READ_ONLY = 'r';
    // Does Not truncate the file if the file already exists but moves the pointer to beginning of the file (READ + WRITE)
    const READ_WRITE_APPEND_BEGIN = 'r+';
    // Truncates the contents of the file if already exists (WRITE ONLY)
    const WRITE_ONLY_CONTENTS_TRUNCATE = 'w';
    // Truncates the contents of the file if already exists (READ + WRITE)
    const READ_WRITE_CONTENTS_TRUNCATE = "w+";
    //Appends the data to the end of the file if file doesnt exits tries to create it (WRITE ONLY)
    const WRITE_ONLY_APPEND_END = "a";
    // Appends the data to the end of the file (READ + WRITE)
    const WRITE_READ_APPEND_END = "a+";
    // If file exists it throws an exception (WRITE ONLY)
    const CREATE_OPEN_WRITE_ONLY = "x";
    // If file exists it throws an exception (WRITE ONLY)
    const CREATE_OPEN_READ_WRITE = "x";
    // Advisory Lock should be obtained before changing file ( WRITE ONLY)
    const CREATE_WRITE_ONLY_APPEND_BEGIN_ON_LOCK = 'c';
    // Same as above but (READ+WRITE)
    const CREATE_READ_WRITE_APPEND_BEGIN_ON_LOCK = 'c';

}

?>
