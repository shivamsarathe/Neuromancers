<?php
class Dashboard_controller extends CI_Controller{
	
	public function __construct(){
                parent::__construct();
                $this->load->model('Fetch_data');
                $this->load->helper('url_helper');
                $this->load->model('complaint_lodge');
                $this->load->library('session');
        }

    public function viewDashboard(){

        // if(isset($_SESSION['logged_in']))
        // {
    	   // $data['scheme_list'] = $this->Fetch_data->getSchemesList();    	
    	   // $this->load->view('schemes',$data);
        // }
        // else
        // {
        //      redirect('home', 'refresh');
        // }
        $data['scheme_list'] = $this->Fetch_data->getSchemesList(); 
        $this->load->view('schemes',$data);
    }
    public function viewNgo(){

        $data['ngo_list'] = $this->Fetch_data->getNgoList();       
        $this->load->view('ngo',$data);
    }
      public function insert_complaint(){

        $this->complaint_lodge->complaints();
        $this->load->view('complaints');
        
    }
    public function viewOpportunity()
    {
        $data['opportunity_list'] = $this->Fetch_data->getOpportunities();
        $this->load->view('opportunities',$data);
    }
    public function logOut(){
        session_destroy();
        redirect('home', 'refresh');
    }
    
   
    

    public function viewComplaint(){

		$this->load->view('complaints');
        
    }
    
}
?>