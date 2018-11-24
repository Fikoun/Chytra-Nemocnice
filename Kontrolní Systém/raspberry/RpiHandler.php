<?php


class Handler{
	public $data;
	public $id;
	public $ip;

	function __construct($conn,$post, $ip) {
    	$sql = "SELECT * FROM units WHERE id =" . $post['id'];
		
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();

		if ($row["ip"] == $ip){
			$this->id = intval($row["id"]);
			$this->data = $post;
			$this->ip = $ip;
		}else{
			header("location: ../");
			die();
		}
    }

    public function save($conn)
    {
    	$sql = "INSERT INTO data (temperature, humidity, ekg, patient_id)
			VALUES 			 (".$this->data["temp"].", ".$this->data["hum"].", ".$this->data["ekg"].", 2)";


		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }

}