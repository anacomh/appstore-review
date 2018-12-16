<?php

include 'functions.php'; //JSON filtering functions

if(isset($_POST['url'])) {
	$rev_url = $_POST['url'];

	$page = $_POST['page'];

	$appid = between ('id', '?', $rev_url);

	$json_data = getjson($appid,$page); //get JSON content

	if($json_data != '') {

	$entries = between ('"entry":[', '}}], "updated"', $json_data);
	$entries = '{"entry":[' . $entries . '}}]}' ;

	$json_array = json_decode($entries, true);

		$authors = between ('{"author":{"uri":', '}}], "updated"', $json_data);
		$authors = '{"authors":[{"author":{"uri":' . $authors . '}}]}';

		$json_array = json_decode($authors, true);
		$arrlen = count($json_array['authors']);

		//create csv data
		$csv_data = array(
			array("Username", "Star Rating", "Review Comment", "Link")
		);

		$counter = 0;

		while ($counter < $arrlen) {
		$usernname = $json_array['authors'][$counter]['author']['name']['label'];
		$link = $json_array['authors'][$counter]['author']['uri']['label'];
		$star_rating = $json_array['authors'][$counter]['im:rating']['label'];
		$review_comment = $json_array['authors'][$counter]['content']['label'];

		//$date = $json_array['authors'][$counter]['author']['uri']['label'];

		$added = array($usernname, $star_rating, $review_comment, $link);

		array_push($csv_data, $added); // add to csv data


		$counter++ ;

		}

	//The name of the CSV file that will be downloaded by the user.
	$fileName = 'reviews.csv';

	//Setting the Content-Type and Content-Disposition headers.
	header('Content-Type: application/excel');
	header('Content-Disposition: attachment; filename="' . $fileName . '"');

		//Open up a PHP output stream using the function fopen.
	$fp = fopen('php://output', 'w');

	//Loop through the array containing our CSV data.
	foreach ($csv_data as $row) {
		//fputcsv formats the array into a CSV format.
		//It then writes the result to our output stream.
		fputcsv($fp, $row);
	}

	//Close the file handle.
	fclose($fp);

  }

  else {
	  "<script>alert('Missing app id')</script>";
  }

}

else {
	echo "<script>alert('Required Post Parameters Not Set!')</script>";
}


?>
