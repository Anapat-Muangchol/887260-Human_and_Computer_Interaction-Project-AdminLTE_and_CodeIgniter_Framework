<?php
class M_hci_person extends CI_Model {
	public $ps_id;
	public $ps_pf_id;
	public $ps_first_name;
	public $ps_last_name;
	public $ps_code;
	public $ps_pos_id;
	public $ps_lvpos_id;
	public $ps_dept_id;

	function M_hci_person() {
		parent::__construct();
	}

	function insert() {
		$sql = "INSERT INTO hci_person (ps_pf_id, ps_first_name, ps_last_name, ps_code, ps_pos_id, ps_lvpos_id, ps_dept_id)
				VALUES(?, ?, ?, ?, ?, ?, ?)";
		$this->db->query($sql, array($this->ps_pf_id, $this->ps_first_name, $this->ps_last_name, $this->ps_code, $this->ps_pos_id, $this->ps_lvpos_id, $this->ps_dept_id));
	}

	function update() {
		$sql = "UPDATE hci_person SET 
					ps_pf_id = ?, 
					ps_first_name = ?, 
					ps_last_name = ?, 
					ps_code = ?, 
					ps_pos_id = ?, 
					ps_lvpos_id = ?, 
					ps_dept_id = ? 
				WHERE ps_id = ? ";
		$this->db->query($sql, array($this->ps_pf_id, $this->ps_first_name, $this->ps_last_name, $this->ps_code, $this->ps_pos_id, $this->ps_lvpos_id, $this->ps_dept_id, $this->ps_id));
	}

	function delete($ps_id) {
		$sql = "DELETE FROM hci_person WHERE ps_id = ? ";
		$this->db->query($sql, array($ps_id));
	}

	function get_by_key($ps_id) {
		$sql = "SELECT * FROM hci_person WHERE ps_id = ? ";
		$query = $this->db->query($sql, array($ps_id)) ;
		return $query;
	}

	function last_insert_id(){
		return $this->db->insert_id();
	}
	
	//--Add Your Function Here--//
	
	function get_personbycode($ps_code) {
		$sql = "SELECT * 
				FROM hci_person 
				LEFT JOIN hci_prefix ON pf_id = ps_pf_id 
				LEFT JOIN hci_position ON pos_id = ps_pos_id 
				LEFT JOIN hci_levelpos ON lvpos_id = ps_lvpos_id 
				LEFT JOIN hci_department ON dept_id = ps_dept_id 
				WHERE ps_code = ? ";
		$query = $this->db->query($sql, array($ps_code)) ;
		return $query;
	}

}
?>
