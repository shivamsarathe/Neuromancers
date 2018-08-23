<?php
class admin_fetch_data extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function getyComplaintList()
        {
        	$this->db->order_by('name');
        	$query = $this->db->get('complaint_lodge');
        	return $query->result_array();
        }
    
          public function getySchemesList()
        {
        	$this->db->order_by('scheme_name');
        	$query = $this->db->get('scheme_info');
        	return $query->result_array();
        }
    
        public function getyNgoList()
        {
        	$this->db->order_by('office_name');
        	$query = $this->db->get('ngo_office');
        	return $query->result_array();
        }
    }
?>