<?php

class Model {

	public $dbhandle;

	public function __construct()
	{
		$dsn = "sqlite:db/data.db";

		try {
			$this->dbhandle = new PDO($dsn, "user", "password", array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,));
		}
		catch(PDOException $e) {
			print new Exception($e->getMessage());
		}
	}

	public function createTables()
	{
		try {
			$this->dbhandle->exec(
				"CREATE TABLE Home (Id INTEGER PRIMARY KEY, title TEXT, subtitle TEXT, description TEXT, image TEXT, url TEXT); " .
				"CREATE TABLE Drinks (Id INTEGER PRIMARY KEY, modelTitle TEXT, creationMethod TEXT, title TEXT, subtitle TEXT, description TEXT, modelFile TEXT, url TEXT); " .
				"CREATE TABLE Cards (Id INTEGER PRIMARY KEY, title TEXT, description TEXT); " .
				"CREATE TABLE Gallery (Id INTEGER PRIMARY KEY, name TEXT, image TEXT); ".
				"CREATE TABLE Formality (Id INTEGER PRIMARY KEY, originality TEXT); ");
		}
		catch(PDOException $e) {
			print new Exception($e->getMessage());
		}

		return "Database tables created.";
	}

	public function insertJSONData()
	{
		$json = file_get_contents("json/data.json");
		$json_data = json_decode($json);
		$home_data = $json_data->home;
		$drinks_data = $json_data->drinks;
		$misc_data = $json_data->cards;
		$gallery_data = $json_data->gallery;
		$formality_data = $json_data->formality;

		try{
			foreach ($home_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Home (Id, title, subtitle, description, image, url) VALUES (?, ?, ?, ?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->title);
				$add_statement->bindParam(3, $value->subtitle);
				$add_statement->bindParam(4, $value->description);
				$add_statement->bindParam(5, $value->image);
				$add_statement->bindParam(6, $value->url);
				$add_statement->execute();
			}

			foreach ($drinks_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Drinks (Id, modelTitle, creationMethod, title, subtitle, description, modelFile, url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->modelTitle);
				$add_statement->bindParam(3, $value->creationMethod);
				$add_statement->bindParam(4, $value->title);
				$add_statement->bindParam(5, $value->subTitle);
				$add_statement->bindParam(6, $value->description);
				$add_statement->bindParam(7, $value->modelFile);
				$add_statement->bindParam(8, $value->url);
				$add_statement->execute();
			}

			foreach ($misc_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Cards (Id, title, description) VALUES (?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->title);
				$add_statement->bindParam(3, $value->description);
				$add_statement->execute();
			}

			foreach ($gallery_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Gallery (Id, name, image) VALUES (?, ?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->name);
				$add_statement->bindParam(3, $value->image);
				$add_statement->execute();
			}

			foreach ($formality_data as $index => $value) {
				$add_statement = $this->dbhandle->prepare("INSERT INTO Formality (Id, originality) VALUES (?, ?)");
				$add_statement->bindParam(1, $index);
				$add_statement->bindParam(2, $value->originality);
				$add_statement->execute();
			}
			return "JSON data inserted into database.";
		}
		catch(PDOException $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbHome(){
		try{
			$result = null;
			$statement = $this->dbhandle->query("SELECT * FROM Home");

			$i = 0;	
			while ($data = $statement->fetch()) {
				$result["home"][$i]["title"] = $data["title"];
				$result["home"][$i]["subtitle"] = $data["subtitle"];
				$result["home"][$i]["description"] = $data["description"];
				$result["home"][$i]["image"] = $data["image"];
				$result["home"][$i]["url"] = $data["url"];
				$i++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Formality");

			$j = 0;	
			while ($data = $statement->fetch()) {
				$result["formality"][$j]["originality"] = $data["originality"];
				$j++;
			}
		}
		catch (PDOException $e) {
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;
		return $result;
	}

		public function dbDrinks(){
		try{
			$result = null;
			$statement = $this->dbhandle->query("SELECT * FROM Drinks");

			$i = 0;	
			while ($data = $statement->fetch()) {
				$result["drinks"][$i]["modelTitle"] = $data["modelTitle"];
				$result["drinks"][$i]["creationMethod"] = $data["creationMethod"];
				$result["drinks"][$i]["title"] = $data["title"];
				$result["drinks"][$i]["subtitle"] = $data["subtitle"];
				$result["drinks"][$i]["description"] = $data["description"];
				$result["drinks"][$i]["modelFile"] = $data["modelFile"];
				$result["drinks"][$i]["url"] = $data["url"];
				$i++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Cards");

			$j = 0;	
			while ($data = $statement->fetch()) {
				$result["cards"][$j]["title"] = $data["title"];
				$result["cards"][$j]["description"] = $data["description"];
				$j++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Gallery");

			$j = 0;	
			while ($data = $statement->fetch()) {
				$result["gallery"][$j]["name"] = $data["name"];
				$result["gallery"][$j]["image"] = $data["image"];
				$j++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Formality");

			$j = 0;	
			while ($data = $statement->fetch()) {
				$result["formality"][$j]["originality"] = $data["originality"];
				$j++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Home");

			$i = 0;	
			while ($data = $statement->fetch()) {
				$result["home"][$i]["title"] = $data["title"];
				$result["home"][$i]["subtitle"] = $data["subtitle"];
				$result["home"][$i]["description"] = $data["description"];
				$result["home"][$i]["image"] = $data["image"];
				$result["home"][$i]["url"] = $data["url"];
				$i++;
			}
		}
		catch (PDOException $e) {
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;
		return $result;
	}

	public function dbAbout(){
		try{
			$result = null;

			$statement = $this->dbhandle->query("SELECT * FROM Formality");

			$j = 0;	
			while ($data = $statement->fetch()) {
				$result["formality"][$j]["originality"] = $data["originality"];
				$j++;
			}

			$statement = $this->dbhandle->query("SELECT * FROM Home");

			$i = 0;	
			while ($data = $statement->fetch()) {
				$result["home"][$i]["title"] = $data["title"];
				$result["home"][$i]["subtitle"] = $data["subtitle"];
				$result["home"][$i]["description"] = $data["description"];
				$result["home"][$i]["image"] = $data["image"];
				$result["home"][$i]["url"] = $data["url"];
				$i++;
			}
		}
		catch (PDOException $e) {
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;
		return $result;
	}
}

?>