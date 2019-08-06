<?php 
class Admin_welcome_model extends CI_Model
{
	public function product_insert($data)
	{
		return $this->db->insert('product',$data);
	}
	public function disp_pro()
	{
		$q=$this->db->select(['id','name','price'])->from('product')->get();
		return $q->result();
	}
	public function del($id)
	{
		return $this->db->delete('product',['id'=>$id]);
	}
	public function update1($id)
	{
		$q=$this->db->select(['id','name','price'])->from('product')->where('id',$id)->get();
		return $q->row();
	}
	public function update2($id,$data)
	{
		$q=$this->db->where('id',$id)->update('product',$data);
		//print_r($q);
		return $q;
	}
	public function search1($data)
	{
		$q=$this->db->select(['name','price'])->from('product')->where('name',$data)->get();
		return $q->row();
	}
	
	public function search2()
	{
		$q=$this->db->select(['id','name','price'])->from('product')->get();
		return $q->result();
	}
	public function ofline_order_book($data)
	{
		return $this->db->insert('order_booking',$data);
	}
	
	public function online_order_list()
	{
	$q=$this->db->select(['id','pname','price','cname','email','mno','address','city'])->from('order_booking')->where('type','online')->get();
		return $q->result();
	}
	
	public function search_res($email)
	{
		$q=$this->db->select(['id','pname','price','cname','email','mno','address','city','type'])->from('order_booking')->where('email',$email)->get();
		return $q->row();
	}
	
	public function ofline_order_page()
	{
		$type="ofline";
	$q=$this->db->select(['id','pname','price','cname','email','mno','address','city'])->from('order_booking')->where('type',$type)->get();
		return $q->result();
	}
}

?>
