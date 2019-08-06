<?php 
class Admin_model extends CI_Model
{
	 public function login($email_address,$ps)
	 {
		//$q=$this->db->where(['un'=>$un,'ps'=>$ps])->get('admin');
		$this->db->where('email', $email_address);
  		$q = $this->db->get('admin');
		if($q->num_rows() > 0)
		{
			foreach($q->result() as $row)
			{
				if($row->is_email_verified == 'yes')
				{
					//print_r ($row->ps);
					$store_password = $this->encryption->decrypt($row->ps);
					//print_r ('<br/>');
					//print_r ($store_password);
					//print_r ('<br/>');
					//print_r ($ps);
					if($ps == $store_password)
					{
						$this->session->set_userdata('id', $row->id);
						//echo "nimabi";
						return $q->row()->un;
					}
					else
					{
						return 'Wrong Password';
					}
				}
				else
					{
					return 'First verified your email address';
				}
			}
		}
		else {
			return 'Wrong Email Address';
		}
	 }

	 public function search() {
		$q=$this->db->select(['id','un','email'])->from('admin')->get();
		return $q->result();
	 }

	 public function forgot_password($email) {
		$this->db->select('email');
        $this->db->from('admin'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
	 }

	 public function update_tokan_password($email,$tokan) {
		$data = array(
			'verification_key' => $tokan
		);
		$this->db->where('email',$email);
		$this->db->update('admin', $data);
	 }

	 public function update_password($tokan,$password) {
		$data = array(
			'ps' => $password
		);
		$this->db->where('verification_key',$tokan);
		$this->db->update('admin', $data);
	 }
}
?>
