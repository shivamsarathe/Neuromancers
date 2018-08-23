<?php
class authentication extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function register_user()
        {
        	$data = array(
            'name' => $this->input->post('name'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'mobile' => $this->input->post('mobile'),
            'gender' => $this->input->post('gender'),
            'role'=> 'user'
            );
            

            return $this->db->insert('all_users', $data);
        }
    
    public function signin()
    {
            $mobile = $this->input->post('mobile');
            $password = $this->input->post('password');
            $this->db->where('mobile',$email);
            $this->db->where('password',$password);
            $query = $this->db->get('all_users');
            $result = $query->result();
            if(count($result)==0)
            {
                return "0";
            }
            else
            {
                return $result[0];
            }
    }

}
