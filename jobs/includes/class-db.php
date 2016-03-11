<?php
	if ( !class_exists ('DB') ) {
		class DB {
			public function __construct() {
				$mysqli = new mysqli('localhost', 'seg', 'e6ujy4ygu', 'seg_db');
				
				if ($mysqli->connect_errno) {
					printf("Connect failed %s\n", $mysqli->connect_error);
					exit();
				}
				
				$this->connection =  $mysqli;
			}
			
			public function insert($query) {				
				$result = $this->connection->query($query);
				
				return $result;
			}

			public function delete($query) {				
				$result = $this->connection->query($query);
				
				return $result;
			}
			
			public function select($query) {							
				$result = $this->connection->query($query);
				if ($result->num_rows > 0) {
					while ( $obj = $result->fetch_object() ) {
						$results[] = $obj;
					}
				} else {
					$results = 0;
				}

				return $results;
			}
		}
	}
	
	$db = new DB;
?>