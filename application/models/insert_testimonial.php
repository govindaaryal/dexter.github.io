<?php 

class insert_testimonial extends CI_Model{

	public function insert($name,$pathname,$name,$position,$company,$comment){
		$data=array(
			'client_name'=>$name,
			'position'=> $position,
			'company'=> $company,
			'comment'=> $comment,
			'src' => $name
			);
		$this->db->insert('testimonial',$data);
	}

}