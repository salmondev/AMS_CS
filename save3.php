<?php 

$filename = time().".txt";

$path = 'http://amsapp.net/images/';

$data = "ABCDE";

if(!file_exists($path)){
	mkdir($path,0777,true);
}
/*
$path = $path.$filename.'.txt';

if(file_put_contents($path,$data))
{
	echo "GG";
}else{
	echo "EZ";
}
*/

/////////////////////////

$myfile = fopen($filename, "w") or die("Unable to open file!");

$txt = "ABC\n";
fwrite($myfile, $txt);

fclose($myfile);

//move_uploaded_file($filename,$path);

rename($filename,"images/".$filename);


