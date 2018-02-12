<?php
class M_hci_prefix extends CI_Model {
	public $pf_id;
	public $pf_name;

	function M_hci_prefix() {
		parent::__construct();
	}

	function insert() {
		$sql = "INSERT INTO hci_prefix (pf_name)
				VALUES(?)";
		$this->db->query($sql, array($this->pf_name));
	}

	function update() {
		$sql = "UPDATE hci_prefix SET 
					pf_name = ?
				WHERE pf_id = ? ";
		$this->db->query($sql, array($this->pf_name, $this->pf_id));
	}

	function delete($pf_id) {
		$sql = "DELETE FROM hci_prefix WHERE pf_id = ? ";
		$this->db->query($sql, array($pf_id));
	}

	function get_by_key($pf_id) {
		$sql = "SELECT * FROM hci_prefix WHERE pf_id = ? ";
		$query = $this->db->query($sql, array($pf_id)) ;
		return $query;
	}

	function last_insert_id(){
		return $this->db->insert_id();
	}
	
	//--Add Your Function Here--//
	
	function get_all(){
		$sql = "SELECT * FROM hci_prefix";
		$query = $this->db->query($sql) ;
		return $query;
	}

}
?>
