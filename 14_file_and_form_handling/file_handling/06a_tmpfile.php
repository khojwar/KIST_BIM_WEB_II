<?php

// syntax:
// tmpfile ( ) : resource|false


// ************** example 1 ************************
$f = tmpfile();

if (false !== $f) {
    // write some text to the file
    fputs($f, 'The current time is ' . strftime('%c'));
}

echo 'The current time is: ' . strftime('%c');

exit(1);  
// Note that the exit status of 1 is used to indicate an error or non-successful completion, which might not be necessary for a typical web script.


// // output: The current time is Thu Jul  1 14:00:00 2021


// *********** Example 2: lternative of above example **************************
// $f = tmpfile();
// if (false !== $f) {
//     // Write the current time to the temporary file
//     fputs($f, 'The current time is ' . strftime('%c'));
//     // Indicate that the file was created successfully
//     echo 'Temporary file created and written successfully.<br>';
// } else {
//     // Indicate that the file creation failed
//     echo 'Failed to create temporary file.<br>';
// }


// example 3: you can read the contents of the temporary file and print it to the browser. 
// After writing to the temporary file, you need to reset the file pointer to the beginning of the file using rewind() before reading its contents with fread().

// Create a temporary file
// $f = tmpfile();

// if (false !== $f) {
//     // Write the current time to the temporary file
//     fputs($f, 'The current time is ' . strftime('%c'));

//     // Rewind the file pointer to the beginning of the file
//     rewind($f);

//     // Read the contents of the file
//     $content = fread($f, 1024); // Read up to 1024 bytes

//     // Print the contents of the temporary file
//     echo 'Contents of the temporary file: ' . $content . '<br>';

//     // Optionally close the file, which deletes it
//     fclose($f);
// } else {
//     // Indicate that the file creation failed
//     echo 'Failed to create temporary file.<br>';
// }

// // Exit the script with a status of 1
// exit(1);



?>