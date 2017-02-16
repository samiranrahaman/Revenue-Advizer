<?php
/*
    Description : Model for Dashboard
    Author      : Deepak kv
    Date        : 28/10/2016
*/
class Dashboard_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
   /*  public function get_dashboard_count()
    {
        //SELECT *,COUNT(DISTINCT userId) as count FROM `answers` A left join questions Q on Q.qno=A.quesNo GROUP BY Q.questionType
    
        $this->db->select("questionType name,COUNT(fid) as y");
        $this->db->from('answers A');
        $this->db->join('questions Q','Q.qno=A.quesNo');
        $this->db->group_by('Q.questionType');

        $query = $this->db->get();
        if($query->num_rows())
            return $query->result_array();
    } */
   

}
