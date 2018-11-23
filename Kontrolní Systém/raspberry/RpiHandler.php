<?php


class Handler{
	public $data;
	public $id;
	public $ip;

	function __construct($post, $ip) {
    	$sql = "SELECT * FROM MyGuests WHERE id =" . $post['id'];
		
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();

		if ($row["ip"] == $ip){
			$this->id = intval($row["id"]);
			$this->id = $post;
		}else{
			header("location: ../");
			die();
		}
    }

}