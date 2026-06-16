<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Newsletter extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('mdl_newsletter');
    }
    function index()
    {
        $this->load->view('data');
    }

    function view_data()
    {
    	$where=null;
    	if (isset($_GET['id']))
    		$where['id']=$_GET['id'];
    		
    		if (isset($_GET['met']))
    			$where['message']=$_GET['met'];
    			
    			if (isset($_GET['data']))
    				$select=$_GET['data'];
    				else $select="*";
    				
    				$return=$this->mdl_newsletter->view_data($where,$select);
    				$this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            $where['id']=$_GET['id'];
            $object=json_encode($this->mdl_newsletter->view_data($where,"*")->result());
            $data_title= "Newsletter Details Delete";
            
            $this->load->module("logs");
            if ($this->logs->add_data($data_title,$object)) {
                echo $this->mdl_newsletter->delete_data($where);
            }
        }
    }
}
