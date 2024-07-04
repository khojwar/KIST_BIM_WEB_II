<?php

// PHP allows you to declare a destructor method for a class with the name __destruct() as follows:
// class className
// {
// 	public function __destruct()
// 	{
// 		//...
// 	}
// }


// PHP destructor example
class File
{
	private $handle;

	private $filename;

	public function __construct($filename, $mode = 'r')
	{
		$this->filename = $filename;
		$this->handle = fopen($filename, $mode);
	}

	public function __destruct()
	{
		// close the filehandle
		if ($this->handle) {
			fclose($this->handle);
		}
	}

	public function read()
	{
		// read the file contents
		return fread($this->handle, filesize($this->filename));
	}
}

$f = new File('./test.txt');
echo $f->read();



// How it works.
// First, define the File class with the constructor that accepts two arguments: $filename and $mode. By default, the File class opens the file for reading.
// Second, open the file and assign the file handle to the $handle property in the constructor.
// Third, close the file handle in the destructor.
// Fourth, return the file contents from the read() method.