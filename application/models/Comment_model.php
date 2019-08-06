<?php 
class Comment_model extends CI_Model
{
	public function comment_insert($data)
	{
		return $this->db->insert('comment',$data);
	}

	public function disp_comment()
	{
		$q=$this->db->select(['id','name','comment'])->from('comment')->get();
		return $q->result();
	}

}

?>
