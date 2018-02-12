<?php
class M_hci_department extends CI_Model {
	public $dept_id;
	public $dept_name;

	function M_hci_department() {
		parent::__construct();
	}

	function insert() {
		$sql = "INSERT INTO hci_department (dept_name)
				VALUES(?)";
		$this->db->query($sql, array($this->dept_name));
	}

	function update() {
		$sql = "UPDATE hci_department SET 
					dept_name = ?
				WHERE dept_id = ? ";
		$this->db->query($sql, array($this->dept_name, $this->dept_id));
	}

	function delete($dept_id) {
		$sql = "DELETE FROM hci_department WHERE dept_id = ? ";
		$this->db->query($sql, array($dept_id));
	}

	function get_by_key($dept_id) {
		$sql = "SELECT * FROM hci_department WHERE dept_id = ? ";
		$query = $this->db->query($sql, array($dept_id)) ;
		return $query;
	}

	function last_insert_id(){
		return $this->db->insert_id();
	}
	
	//--Add Your Function Here--//
	
	function get_all(){
		$sql = "SELECT * FROM hci_department";
		$query = $this->db->query($sql) ;
		return $query;
	}

}
?>
