<?php
class User_profile_model extends CI_Model
{
	public function search($uname) {
		$q=$this->db->select(['id','un','email'])->from('admin')->where('un',$uname)->get();
		return $q->result();
	}

	public function update1($id)
	{
		$q=$this->db->select(['id','un','email'])->from('admin')->where('id',$id)->get();
		return $q->row();
	}

	public function update2($id,$data)
	{
		$q=$this->db->where('id',$id)->update('admin',$data);
		//print_r($q);
		return $q;
	}

}

?>
