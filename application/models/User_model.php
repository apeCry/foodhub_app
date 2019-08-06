<?php 
class User_model extends CI_Model
{
	public function search($s)
	{
		$q=$this->db->select(['id','name','price'])->from('product')->where('name',$s)->get();
		return $q->row();
	}
	public function search2()
	{
		$q=$this->db->select(['id','name','price'])->from('product')->get();
		return $q->result();
	}
	public function book_now($id)
	{
		$q=$this->db->select(['id','name','price'])->from('product')->where('id',$id)->get();
		return $q->row();
	}
	public function online_order_book($data)
	{
		return $this->db->insert('order_booking',$data);
	}
	public function search_res($email)
	{
		$q=$this->db->select(['id','pname','price','cname','email','mno','address','city','type'])->from('order_booking')->where('email',$email)->get();
		return $q->row();
	}
}
?>
