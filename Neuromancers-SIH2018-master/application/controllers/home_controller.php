<?php
class home_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('authentication');
                $this->load->helper('url_helper');
                $this->load->library('session');
            
        }

        public function index()
        {
//                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archives';

                //$this->load->view('templates/header', $data);
                $this->load->view('index', $data);

        }
        public function login()
        {
            $this->load->view('login');
        }
    
        public function register()
        {
            $this->load->view('register');
        }
        
         public function app_create_user()
        {

                $this->authentication->register_user();
                echo "done";
                    
              // redirect('/dashboard', 'refresh');
        }

        public function create_user()
        {

                $this->authentication->register_user();
                	
    	       redirect('/dashboard', 'refresh');
        }
    
        public function authenticateUser()
        {
           $userData= $this->authentication->signIn();
            if($userData=="0")
            {
                echo "<script>alert('Invalid username or password: $userData')</script>";
                redirect('home', 'refresh');
                
            }
            else
            {
                $newdata = array(
                'name'  => $userData->name,
                'email'     => $userData->email,
                'state' => $userData->state,
                'role' =>$userData->role,
                'category'=>$userData->category,
                'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);

                if($newdata['role']=='admin')
                {
                    redirect('admin_dashboard', 'refresh');
                }
                else if($newdata['role']=='user')
                {
                    redirect('dashboard', 'refresh');
                }

                

                
                //echo "<script>alert('Login Successful')</script>";
                
            }
        }





         public function app_authenticate_user()
        {
           $userData= $this->authentication->signIn();
            if($userData=="0")
            {
                echo "wrong";
                
            }
            else
            {
                $newdata = array(
                'name'  => $userData->name,
                'state'     => $userData->state,
                'city' => $userData->city,
                'role' =>$userData->role,
                'category'=>$userData->category,
                'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);

                if($newdata['role']=='admin')
                {
                    redirect('admin_dashboard', 'refresh');
                }
                else if($newdata['role']=='user')
                {
                    redirect('dashboard', 'refresh');
                }

                

                
                //echo "<script>alert('Login Successful')</script>";
                
            }
        }
}