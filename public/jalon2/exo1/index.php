<?php
	require_once("initPDO.php");
	require_once("createUserTable.php");
/*
	$curl = curl_init();
 
	curl_setopt_array($curl, array(
	CURLOPT_URL => "https://imdb-api.com/en/API/Top250Movies/k_u9lnuo3a",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	));
	
	$response = curl_exec($curl);
	
	curl_close($curl);
*/
	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	// User class
	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	class User
	{
		// added by PDO
		// private $id;
		// private $name;
		// private $email;

		public static function getAllUsers() {
			
			$curl = curl_init();
		
			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://imdb-api.com/en/API/Top250Movies/k_u9lnuo3a",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			));
			
			$response = curl_exec($curl);
			
			curl_close($curl);
			$allUsers = json_decode($response,true)["items"];
			return $allUsers;
		}

		// class-side method to render an array of users as an HTML table
		public static function showUsersAsTable($users) {
			echo '<table><thead>
					<tr><th>Id</th><th>Titre</th></tr></thead><tbody>';
			foreach($users as $u) {
				echo "<tr>"
				. "<td>". $u["id"] . "</td>"
				. "<td>". $u["title"] . "</td></tr>";
			}
			echo '</tbody></table>';
		}

		public static function showAllUsersAsTable() {
			static::showUsersAsTable(static::getAllUsers());
		}
	}
 

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style>
		table {
			border-top: 1px solid black;
			border-bottom: 1px solid black;
		}

		td {
			text-align: center;
			padding-left: 2em;
			padding-right: 2em;
		}
		</style>
	</head>
	<body>
		<h1>Films</h1>
		<?php
			User::showAllUsersAsTable();
		?>
	</body>
</html>

