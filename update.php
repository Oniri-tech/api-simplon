<?php
    include("db_connect.php");

    function updatePost($id)
    {
        global $conn;
        $content = $_POST["content"];
        $author = $_POST["author"];
        $date = date('Y-m-d H:i:s');
        echo $query = "UPDATE post SET content='". $content ."', author='". $author ."', date='". $date . "' WHERE id=".$id;

        if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Post mis a jour avec succes.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Echec de la mise a jour du post. '. mysqli_error($conn)
			);
			
		}
		
		header('Content-Type: application/json');
		echo json_encode($response);
    }

    function updateTopic($id)
    {
        global $conn;
        $title = $_POST["title"];
        echo $query = "UPDATE post SET title='". $title ."' WHERE id=".$id;
        if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Topic mis a jour avec succes.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Echec de la mise a jour du topic. '. mysqli_error($conn)
			);
			
		}
		header('Content-Type: application/json');
		echo json_encode($response);
    }
?>