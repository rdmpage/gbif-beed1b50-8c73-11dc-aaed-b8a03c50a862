<?php

// Code to parse CSV occurrence file

ini_set("auto_detect_line_endings", true); // vital if  files have Windows ending

//--------------------------------------------------------------------------------------------------
// http://stackoverflow.com/a/5996888/9684
function translate_quoted($string) {
  $search  = array("\\t", "\\n", "\\r");
  $replace = array( "\t",  "\n",  "\r");
  return str_replace($search, $replace, $string);
}

//--------------------------------------------------------------------------------------------------
$filename = 'occurrence.csv';

$file = @fopen($filename, "r") or die("couldn't open $filename");

$fieldsEnclosedBy = "";
$fieldsTerminatedBy = ",";
$ignoreHeaderLines = 0;

$row_count = 0;

$headers = array(
"id",
"catalogNumber",
"collectionCode",
"institutionCode",
"scientificName",
"recordedBy",
"taxonRank",
"kingdom",
"phylum",
"class",
"order",
"family",
"genus",
"specificEpithet",
"infraspecificEpithet",
"decimalLatitude",
"decimalLongitude",
"coordinatePrecision",
"coordinateUncertaintyInMeters",
"maximumElevationInMeters",
"minimumElevationInMeters",
"minimumDepthInMeters",
"maximumDepthInMeters",
"continent",
"country",
"stateProvince",
"county",
"locality",
"year",
"month",
"day",
"basisOfRecord",
"identifiedBy",
"dateIdentified",
"occurrenceRemarks",
"locationRemarks",
"recordNumber",
"vernacularName",
"identificationQualifier",
"individualCount",
"eventID",
"geodeticDatum",
"eventTime",
"associatedSequences",
"eventDate"
);
$header_index = array();

foreach ($headers as $header)
{
	$header_index[$header] = $count++;
}


$file_handle = fopen($filename, "r");
while (!feof($file_handle)) 
{
	$row = fgetcsv(
		$file_handle, 
		0, 
		translate_quoted($fieldsTerminatedBy),
		(translate_quoted($fieldsEnclosedBy) != '' ? translate_quoted($fieldsEnclosedBy) : '"') 
		);

	$go = is_array($row);
		
	if ($go && ($row_count == 0) && ($ignoreHeaderLines == 1))
	{
		$go = false;
		
		// headers
		$headers = $row;
		
		$count = 0;
		foreach ($row as $header)
		{
			$header_index[$header] = $count++;
		}
	}
	
	if ($go)
	{
		$data = new stdclass;
		
		for ($i = 0; $i < count($row); $i++)
		{
			$data->{$headers[$i]} = $row[$i];
		}

		if ($data->id == '8c811258-4c0a-457e-9a11-ea54ebef2b86')
		{
			//print_r($data);
			
			echo json_encode($data, JSON_PRETTY_PRINT);
			
			exit();
		}
	}
	
	$row_count++;
	
}


?>