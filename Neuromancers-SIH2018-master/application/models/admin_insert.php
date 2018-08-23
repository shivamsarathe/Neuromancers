<?php
class admin_insert extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function add_scheme()
        {
        	$data = array(
            'state' => $this->input->post('state'),
            'scheme_name' => $this->input->post('scheme_name'),
            'age_from' => $this->input->post('age_from'),
            'age_to' => $this->input->post('age_to'),
            'caste' => $this->input->post('category'),
            'status' => $this->input->post('marital_status'),
            'description' => $this->input->post('description'),
            'eligibility' => $this->input->post('eligibility'),
            'contact' => $this->input->post('contact'),
            'benefits' => $this->input->post('benifits'),
            'launched_by' => $this->input->post('launched_by'),
            'documents'=>  $this->input->post('documents'),
            'beneficiary'=>  $this->input->post('benificiary')
            );
            
            return $this->db->insert('scheme_info', $data);
        }
    
        public function delete_scheme()
        {
            $scheme_id = $this->input->post('scheme_id');
            $this->db->query('delete from scheme_info where scheme_id='.$scheme_id);
            
           // echo 'scheme id:  '.$scheme_id;
        }
    
        public function add_ngo()
        {
        	$data = array(
            'office_name' => $this->input->post('office_name'),
            'refrence_no' => $this->input->post('refrence_no'),
            'address' => $this->input->post('address'),
            'state' => $this->input->post('state'),
            'sector' => $this->input->post('sector')
            
            );

            return $this->db->insert('ngo_office', $data);
        }
        
        public function delete_ngo()
        {
            $id = $this->input->post('id');
            $this->db->query('delete from ngo_office where id='.$id);
            
           // echo 'scheme id:  '.$scheme_id;
        }

}
