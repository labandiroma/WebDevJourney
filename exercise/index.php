<?php
	//6 arguments, filename is included
	//argc => total number of arguments
	//argv => contains the value of the argument
	//trim => remove whitespace/tabs
	//array_fill => fills and array with value ; start_index -> first index; count => number of elements to be inserter; value -> value
	//isset => checks if variable is set, it has to be declared and is not NULL

	$fileName = $argv[0];
	$personCode = $argv[1];
	$firstName = $argv[2];
	$familyName = $argv[3];
	$gender = $argv[4];
	$birthDate = $argv[5];

	if($argc == 1 || $argv[1] == "--help")
	{
		echo "\nExample Command:\n";
		echo "php <file  name> <person code> <first name> <family name> <gender> <birth date>\n";
	}
	else if ($argc == 7)
	{
		$printData =  "php" . " " . $fileName . " " . $personCode . " " . $firstName . " " . $familyName . " " . $gender . " " . $birthDate;

		echo $printData;

		$personRecords = fopen("personRecords.txt", "a");
		fwrite($personRecords, $printData . "\n");
		fclose($personRecords);
	}
	else
	{
		echo "Error! Follow correct arguments";
	}
?>