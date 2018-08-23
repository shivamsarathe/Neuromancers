<?php
class Admin_controller extends CI_Controller{
	
	public function __construct(){
                parent::__construct();
                $this->load->model('admin_fetch_data');
                $this->load->helper('url_helper');
                $this->load->model('admin_insert');
                $this->load->library('session');
        
                
        }

    public function viewAdminDashboard(){
    	
       	
    	

        // if(isset($_SESSION['logged_in']))
        // {
        //    $data['scheme_list'] = $this->admin_fetch_data->getySchemesList();      
        //    $this->load->view('admin_schemes',$data);
        // }
        // else
        // {
        //      redirect('home', 'refresh');
        // }

        $data['scheme_list'] = $this->admin_fetch_data->getySchemesList();      
        $this->load->view('admin_schemes',$data);
        
    }
    
    public function viewAdminOpportunities(){
    	
        $this->load->view('admin_opportunities');
    }
    
    public function viewAdminNgos(){
    	
        $data['ngo_list'] = $this->admin_fetch_data->getyNgoList();    	
    	$this->load->view('admin_ngos',$data);
    }
    
     public function viewAdminComplaints(){
        
         $data['complaint_list'] = $this->admin_fetch_data->getyComplaintList();    	
    	$this->load->view('admin_complaints',$data);
        
    }
    
     public function insert_scheme(){

		$this->admin_insert->add_scheme();
                	
    	       redirect('/admin_dashboard', 'refresh');
        
    }
    public function remove_scheme(){
        $this->admin_insert->delete_scheme();
        
         redirect('/admin_dashboard', 'refresh');
                   	
    }
    
    public function insert_ngo(){

		$this->admin_insert->add_ngo();
                	
    	       redirect('/admin_dashboard/ngos', 'refresh');
        
    }
    
    public function remove_ngo(){
        $this->admin_insert->delete_ngo();
        
         redirect('/admin_dashboard/ngos', 'refresh');
                   	
    }


    public function openNotificationConsole(){
            $this->load->view('notification_console');
    }
}
?>