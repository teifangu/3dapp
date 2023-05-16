<?php

class Controller {

	public $load;
	public $model;

	function __construct($pageURI = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		$this->$pageURI();
	}

	function createTables()
	{
		$data = $this->model->createTables();
		$this->load->view("viewMessage", $data);
	}

	function insertData()
	{
		$data = $this->model->insertJSONData();
		$this->load->view("viewMessage", $data);
	}

	function home()
	{
		$data = $this->model->dbHome();
		$this->load->view("home", $data);
	}

	function drinks()
	{
		$data = $this->model->dbDrinks();
		$this->load->view("drinks", $data);
	}

	function about()
	{
		$data = $this->model->dbAbout();
		$this->load->view("about", $data);
	}
}

?>