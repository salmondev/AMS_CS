<?php
	$file = fopen("TEST_IMPORT.csv","r");

	/*
	<<  specific  >>
	// before your while loop 
    $wantedColumns = array(1,5,9,15);

    // ...

    for ($c=0; $c < $num; $c++) {
    if (!in_array($c,$wantedColumns)) continue;
    // ....
	*/

	//////////////////////////////////////////////

	/*$handle = @fopen("TEST_IMPORT.csv", "r");
	$wantedColumns = array("ABC");
	if ($handle)
	{ 
		$line = fgets($handle);
	} // Your string is in the $line 

	if(!in_array($line,$wantedColumns))
	{*/
	while (!feof($file)) {
		$content = fgetcsv($file);
		$count = count($content);
		//$specific = 5;
		$unwantedColumns = array(1,5);
		for ($i=0; $i < $count ; $i++) { 
			//if($i != $specific)
			if (!in_array($i,$unwantedColumns))
			{
				
				echo $content[$i]."\t";
			}
			/*else
			{
				$i++;
			}*/
		}
		echo "<br/>";
	}
//}
	
?>
