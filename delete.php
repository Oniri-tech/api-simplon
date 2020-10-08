<?php
    function deletePost($id)
	{
		global $conn;
		$query = "DELETE FROM post WHERE id=".$id;
		if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Post supprime avec succes.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'La suppression du post a echoue. '. mysqli_error($conn)
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
    }

    function deleteTopic($id)
	{
		global $conn;
		$query = "DELETE FROM topic WHERE id=".$id;
		if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Topic supprime avec succes.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'La suppression du topic a echoue. '. mysqli_error($conn)
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
?>