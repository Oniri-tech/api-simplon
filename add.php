<?php
    include("db_connect.php");
    function addTopic(){
        global $conn;
        $title = $_POST["title"];
        echo $query = "INSERT INTO topic(title) VALUE('". $title ."')";
        if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Topic ajouté avec succès'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'ERREUR!.'. mysqli_error($conn)
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
    }

    function addPost()
    {
        global $conn;
        $content = $_POST["content"];
        $author = $_POST["author"];
        $date = date('Y-m-d H:i:s');
        echo $query = "INSERT INTO post(content, author, date) VALUE('". $content ."', '". $author ."', '" . $date . "')";
        if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Post ajouté avec succès'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'ERREUR!.'. mysqli_error($conn)
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
    }
?>