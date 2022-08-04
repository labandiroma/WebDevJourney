<?php
	echo "\nExample Command:\n";
	echo "php <file  name> <person code> <first name> <family name> <gender> <birth date>\n";

	//6 arguments, filename is included
	//argc => total number of arguments
	//argv => contains the value of the argument
	//trim => remove whitespace/tabs

	$personCode = $argv[1];
	$firstName = $argv[2];
	//$familyName = "Labandiro";
	//$gender = 'F';
	//$birthDate = "01/17/1996";

	if($argc == 1 || $argv[1] == "--help")
	{
		echo "Hello";
	}
	else if($argv[1] && $argv[2] && $argv[3] && $argv[4] && $argv[5] )//($argv[1] == $personCode) &&
	        //$argv[2] == $firstName &&
	    	//$argv[3] == $familyName &&
	    	//$argv[4] == $gender &&
	    	//$argv[5] == $birthDate)
	{
		echo $argv[1];
		echo $argv[2];
		echo $argv[3];
		echo $argv[4];
		echo $argv[5];
	}
	else
	{
		echo "Not Found";
	}

	//$personRecords = fopen("personRecords.txt", "a");

	//$a = array(1, 2, array("a", "b", "c"));
	//var_dump($a);


	//2nd array = display ang text 
	/*$resSTDIN=fopen("php://stdin","r");
    echo("Type 'x'. Then press return.");
    $strChar = stream_get_contents($resSTDIN, 1);

    echo("\nYou typed: ".$strChar."\n\n");
    fclose($resSTDIN);*/

    //REFERENCES:
    //ARGV AND ARGC
    //https://www.youtube.com/watch?v=eQ7TIP3fLEA
    //https://www.youtube.com/watch?v=fjfQxOV_EiA

?>