<?php
    include("db_connect.php");
    function getPosts()
    {
        global $conn;
        $query = "SELECT * FROM post";
        $result = array();
        $response = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($response))
		{
			$result[] = $row;
		}
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
    }

    function getPost($id)
    {
        global $conn;
        $query = "SELECT * FROM post WHERE id=".$id." LIMIT 1";
        $result = mysqli_query($conn, $query);
        header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
    }
?>