<?php
class M_hci_levelpos extends CI_Model {
	public $lvpos_id;
	public $lvpos_name;

	function M_hci_levelpos() {
		parent::__construct();
	}

	function insert() {
		$sql = "INSERT INTO hci_levelpos (lvpos_name)
				VALUES(?)";
		$this->db->query($sql, array($this->lvpos_name));
	}

	function update() {
		$sql = "UPDATE hci_levelpos SET 
					lvpos_name = ?
				WHERE lvpos_id = ? ";
		$this->db->query($sql, array($this->lvpos_name, $this->lvpos_id));
	}

	function delete($lvpos_id) {
		$sql = "DELETE FROM hci_levelpos WHERE lvpos_id = ? ";
		$this->db->query($sql, array($lvpos_id));
	}

	function get_by_key($lvpos_id) {
		$sql = "SELECT * FROM hci_levelpos WHERE lvpos_id = ? ";
		$query = $this->db->query($sql, array($lvpos_id)) ;
		return $query;
	}

	function last_insert_id(){
		return $this->db->insert_id();
	}
	
	//--Add Your Function Here--//
	
	function get_all(){
		$sql = "SELECT * FROM hci_levelpos";
		$query = $this->db->query($sql) ;
		return $query;
	}

}
?>
