<?php
	require_once('class-db.php');
	
	if ( !class_exists('INSERT') ) {
		class INSERT {
			public function post($postdata) {
				global $db;
				
								
				$query = "INSERT INTO posts (post_jobId, post_title, post_content) 
VALUES ('$postdata[post_jobId]', '$postdata[post_title]', '$postdata[post_content]') ";
							
				return $db->insert($query);
			}
		}
	}
	
	$insert = new INSERT;
?>