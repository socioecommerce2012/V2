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

class PrintErrors {

    private static $WarningBegin = <<<EOD

========================================================
*****                 Warning                      *****
========================================================

EOD;
    private static $WarningEnd = <<<EOD

========================================================
========================================================
   
EOD;
    private static $ErrorBegin = <<<EOD

========================================================
*****                   Error                      *****
========================================================

EOD;
    private static $ErrorEnd = <<<EOD

========================================================
========================================================

EOD;
    private static $FileStackTraceBegin = <<<EOD

========================================================
*****       Printing Stack Trace Begin             *****
========================================================

EOD;
    private static $FileStackTraceEnd = <<<EOD

========================================================
*****               Stack Trace End                *****
========================================================

EOD;

//************************************************************************************
//                                                                                      
// Function Name : PrintStackTrace                                                    
//                                                                                              
// Inputs : StackTraceArgument                                                                                
//                                                                                    
// Outputs : Prints The trace in the formatted way                                                                          
//                                                                                       
// Functionality : This function is used to print the stack trace in the formatted way
//                 This can be customised as required                                                                     
//                                                                                              
// Exceptions Throws : None                                                               
//                                                                                      
//                                                                                    
// Algorithm:                                                                           
//           1) Prints stack trace begin
//           2) Prints stack trace
//           3) Prints stack trace end
//                                                                                      
//************************************************************************************
    public static function PrintStackTrace($StackTrace) {
        echo PrintErrors::$FileStackTraceBegin;
        echo $StackTrace;
        echo PrintErrors::$FileStackTraceEnd;
    }

//************************************************************************************
//                                                                                      
// Function Name : PrintError                                                    
//                                                                                              
// Inputs : Error                                                                                
//                                                                                    
// Outputs : Prints The error in the formatted way                                                                          
//                                                                                       
// Functionality : This function is used to print the error in the formatted way
//                 This can be customised as required                                                                     
//                                                                                              
// Exceptions Throws : None                                                               
//                                                                                      
//                                                                                    
// Algorithm:                                                                           
//           1) Prints error begin
//           2) Prints error
//           3) Prints error end
//                                                                                      
//************************************************************************************
    public static function PrintError($Error) {
        echo PrintErrors::$ErrorBegin;
        echo $Error;
        echo PrintErrors::$ErrorEnd;
    }

//************************************************************************************
//                                                                                      
// Function Name : PrintWarning                                                    
//                                                                                              
// Inputs : Warning                                                                                
//                                                                                    
// Outputs : Prints The Warning in the formatted way                                                                          
//                                                                                       
// Functionality : This function is used to print the Warning in the formatted way
//                 This can be customised as required                                                                     
//                                                                                              
// Exceptions Throws : None                                                               
//                                                                                      
//                                                                                    
// Algorithm:                                                                           
//           1) Prints Warning begin
//           2) Prints Warning
//           3) Prints Warning end
//                                                                                      
//************************************************************************************
    public static function PrintWarning($Warning) {
        echo PrintErrors::$WarningBegin;
        echo $Warning;
        echo PrintErrors::$WarningEnd;
    }

}

?>
