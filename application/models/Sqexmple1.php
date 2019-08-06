<?php
class Sqexmple1 extends CI_Model
{
	public function get_book()
	{
		$this->db->select()->from('a');
		
		$q=$this->db->get();
		
		return $q;
		/*foreach($q->result_array() as $row)
		{
			return $row['un'];
		}*/
		//return $q->result_array();
	}
}
?>
