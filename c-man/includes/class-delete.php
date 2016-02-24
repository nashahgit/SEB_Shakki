<?php
	require_once('class-db.php');
	
	if ( !class_exists('DELETE') ) {
		class DELETE {
			public function post($postdata) {
				global $db;
				
				$query = "DELETE FROM posts WHERE post_jobId = '$postdata[post_jobId]'  LIMIT 1";
							
				return $db->delete($query);
			}
		}
	}
	
	$delete = new DELETE;
?>