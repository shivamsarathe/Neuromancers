<?php
class Fetch_data extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function getNgoList()
        {
        	$this->db->order_by('office_name');
        	$query = $this->db->get('ngo_office');
        	return $query->result_array();
        }

        public function getSchemesList()
        {
        	$this->db->order_by('scheme_name');
        	$query = $this->db->get('scheme_info');
        	return $query->result_array();
        }
        public function getOpportunities()
        {
            $this->db->order_by('job_name');
            $query = $this->db->get('oppurtunities');
            return $query->result_array();
        }
    }
?>