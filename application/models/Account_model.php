<?php
	class Account_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllAccount(){
			$query = $this->db->get('account');
			return $query->result(); 
		}

		public function insertAccount($account){
			return $this->db->insert('account', $account);
		}

		public function getAccount($id){
			$query = $this->db->get_where('account',array('acc_id'=>$acc_id));
			return $query->row_array();
		}

		public function updateaccount( $account, $acc_id){
			$this->db->where('account.id', $acc_id);
			return $this->db->update('account', $account);
		}

		public function deleteaccount($acc_id){
			$this->db->where('account.id', $acc_id);
			return $this->db->delete('account');
		}

	}
?>