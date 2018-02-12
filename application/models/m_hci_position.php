<?php
class M_hci_position extends CI_Model {
	public $pos_id;
	public $pos_name;

	function M_hci_position() {
		parent::__construct();
	}

	function insert() {
		$sql = "INSERT INTO hci_position (pos_name)
				VALUES(?)";
		$this->db->query($sql, array($this->pos_name));
	}

	function update() {
		$sql = "UPDATE hci_position SET 
					pos_name = ?
				WHERE pos_id = ? ";
		$this->db->query($sql, array($this->pos_name, $this->pos_id));
	}

	function delete($pos_id) {
		$sql = "DELETE FROM hci_position WHERE pos_id = ? ";
		$this->db->query($sql, array($pos_id));
	}

	function get_by_key($pos_id) {
		$sql = "SELECT * FROM hci_position WHERE pos_id = ? ";
		$query = $this->db->query($sql, array($pos_id)) ;
		return $query;
	}

	function last_insert_id(){
		return $this->db->insert_id();
	}
	
	//--Add Your Function Here--//
	
	function get_all(){
		$sql = "SELECT * FROM hci_position";
		$query = $this->db->query($sql) ;
		return $query;
	}

}
?>
