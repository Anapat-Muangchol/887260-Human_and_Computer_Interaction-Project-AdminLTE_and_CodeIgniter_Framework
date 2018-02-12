<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_controller extends CI_Controller {

	function output($view, $data)
	{
		$info['css'] = $this->load->view('template/v_css', '', true);
		$info['javascript'] = $this->load->view('template/v_javascript', '', true);
		$info['header'] = $this->load->view('template/v_header', '', true);
		$info['menu'] = $this->load->view('template/v_menu', '', true);
		
		$info['body'] = $this->load->view($view, $data, true);
		$this->load->view('template/v_template', $info, false);
	}
}
?>