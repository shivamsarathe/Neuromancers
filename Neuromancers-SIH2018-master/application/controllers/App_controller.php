<?php
class App_controller extends CI_Controller{
	
	public function __construct(){
                parent::__construct();
                $this->load->model('Fetch_data');
                $this->load->helper('url_helper');
        }

    public function getAllSchemes()
    {
    	$data['schemes_list'] = $this->Fetch_data->getSchemesList();    	
    	echo json_encode($data['schemes_list']);
    }
    public function getAllOffices()
    {
    	$data['offices_list'] = $this->Fetch_data->getNgoList();    	
    	echo json_encode($data['offices_list']);
    }

}
