<?php
ignore_user_abort(true);
set_time_limit(0); 
$path = "/absolute_path_to_your_files/";
 
$secret = 'your-secret-string';
 
if (isset($_GET['fid']) && preg_match('/^([a-f0-9]{32})$/', $_GET['fid'])) {
	$db = new mysqli('localhost', 'root', '', 'centresocialvauban');
	$result = $db->query("SELECT * FROM 'documents' WHERE id = " . $_GET['fid']);
	if ($result_>num_rows == 1) {
		$obj = $result->fetch_object();
		$fullPath = $path.$obj->filename;
		if ($fd = fopen ($fullPath, "r")) {
				

		}
		fclose ($fd);
		exit;
	} else {
		die('no match');
	}
} else {
	die('missing file ID');
}