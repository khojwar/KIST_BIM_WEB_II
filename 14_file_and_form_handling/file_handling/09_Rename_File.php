<?php
// syntax
// rename ( string $oldname , string $newname , resource $context = ? ) : bool

// example
// 1) Simple PHP rename file example
// The following example uses the rename() function to rename the readme.txt file to readme_v2.txt file in the same directory:


// // Define the old and new filenames
// $oldname = 'readme1.txt';
// $newname = 'readme_v2.txt';

// // Attempt to rename the file
// if (rename($oldname, $newname)) {
//     // If successful, create a success message
//     $message = sprintf(
//         'The file %s was renamed to %s successfully!',
//         $oldname,
//         $newname
//     );
// } else {
//     // If there is an error, create an error message
//     $message = sprintf(
//         'There was an error renaming the file %s',
//         $oldname
//     );
// }

// // Output the message
// echo $message;






// 2) Rename and move the file
// The following example uses the rename() function to move the readme.txt to the public directory and rename it to readme_v3.txt:

$oldname = 'readme_v2.txt';
$newname = 'public/readme_v3.txt';

if (rename($oldname, $newname)) {
	$message = sprintf(
		'The file %s was renamed to %s successfully!',
		$oldname,
		$newname
	);
} else {
	$message = sprintf(
		'There was an error renaming file %s',
		$oldname
	);
}

echo $message;





// 3) PHP rename multiple files helper function
// The following example defines a function that allows you to rename multiple files. The rename_files() function renames the files that match a pattern. It replaces a substring in the filenames with a new string.


// function rename_files(string $pattern, string $search, string $replace) : array
// {
// 	$paths = glob($pattern);

// 	$results = [];

// 	foreach ($paths as $path) {
// 		// check if the pathname is a file
// 		if (!is_file($path)) {
// 		    $results[$path] = false;
// 			continue;
// 		}
// 		// get the dir and filename
// 		$dirname = dirname($path);
// 		$filename = basename($path);

// 		// replace $search by $replace in the filename
// 		$new_path = $dirname . '/' . str_replace($search, $replace, $filename);

// 		// check if the new file exists
// 		if (file_exists($new_path)) {
// 		    $results[$path] = false;
// 			continue;
// 		}

// 		// rename the file
// 		$results[$path] = rename($path, $new_path);
// 	}
// 	return $results;
// }


// How it works.

// First, get the paths that match a pattern by using the glob() function. The glob() function returns an array of files (or directories) that match a pattern.
// Second, for each path, check if it is a file before renaming.




