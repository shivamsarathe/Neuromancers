<?php
class complaint_lodge extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function complaints()
        {
            $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'state' => $this->input->post('state'),
            'subject' => $this->input->post('subject'),
            'complaint' => $this->input->post('complaint')
            );

            return $this->db->insert('complaint_lodge', $data);
        }
    }
?>