<?php
include('my_controller.php');
class Home extends My_controller {

	function index()
	{
		$data["heading"] = "";
		$this->output('V_01/v01_01', $data);
	}

	function v_01()
	{
		$data["heading"] = "";
		$this->output('V_01/v01_01', $data);
	}

	function v_02()
	{
		$data["heading"] = "";
		$this->output('V_02/v01_02', $data);
	}

	function v_03()
	{
		$data["heading"] = "";
		$this->output('V_03/v01_03', $data);
	}

	function v_04()
	{
		$data["heading"] = "";
		$this->output('V_04/v01_04', $data);
	}

	function v_05()
	{
		$data["heading"] = "";
		$this->output('V_05/v01_05', $data);
	}




	//==================== V_01 ========================
	function v01_01()
	{
		$data["heading"] = "";
		$this->output('V_01/v01_01', $data);
	}
	function v02_01()
	{
		$data["heading"] = "";
		$this->output('V_01/v02_01', $data);
	}
	function v03_01()
	{
		$data["heading"] = "";
		$this->output('V_01/v03_01', $data);
	}

	//==================== V_02 ========================
	function v01_02()
	{
		$data["heading"] = "";
		$this->output('V_02/v01_02', $data);
	}
	function v02_02()
	{
		$data["heading"] = "";
		$this->output('V_02/v02_02', $data);
	}
	function v03_02()
	{
		$data["heading"] = "";
		$this->output('V_02/v03_02', $data);
	}

	//==================== V_04 ========================
	function v01_04()
	{
		$data["heading"] = "";
		$this->output('V_04/v01_04', $data);
	}
	function v02_04()
	{
		$data["heading"] = "";
		$this->output('V_04/v02_04', $data);
	}

	//==================== V_05 ========================
	function v01_05()
	{
		$data["heading"] = "";
		$this->output('V_05/v01_05', $data);
	}
	function v02_05()
	{
		$data["heading"] = "";
		$this->output('V_05/v02_05', $data);
	}
	function v03_05()
	{
		$data["heading"] = "";
		$this->output('V_05/v03_05', $data);
	}
	function v04_05()
	{
		$data["heading"] = "";
		$this->output('V_05/v04_05', $data);
	}
}
?>