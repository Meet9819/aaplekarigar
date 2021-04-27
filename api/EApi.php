<?php

//Api.php

class EAPI
{
	private $connect = '';

	function __construct()
	{
		$this->database_connection();
	}

	function database_connection()
	{
		$this->connect = new PDO("mysql:host=localhost;dbname=aaplekar_handicraft", "aaplekar_handi", "loveyoudad9820102993");
	}

	function fetch_all()
	{
		$query = "SELECT * FROM products ORDER BY id";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}


}

?>