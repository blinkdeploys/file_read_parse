<?php 

function findMatches($rgx="") {
  
  if ($rgx == null) die("Pattern string not found");
  
  // the file location
  $fileLoc = "parse.txt";
  
  // build the pattern, square braces
  $rgx = "/\[" + $rgx + "\]/i";

  // open the file
  $filePtr = fopen($fileLoc, "r") or die("404!");

  // read in the file
  $fileContents = "";
  
  // while end of file has not been reached...
  while(!feof($filePtr) {
    // read one line in...
    $fileContents += fgetc($filePtr);
  }
  
  // find all occurrences of the input string [$rgx]
  if (preg_match_all($rgx, $fileContents, $matches)) {
    
    // show all the matches to the console
    var_dump($matches);
    
  }
        
  // close the file pointer
  fclose($filePtr);
  
      
}
        
findMatches("lorem ispum");
  
?>
