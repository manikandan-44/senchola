<?php
class Logindata extends CI_Model
{
   public function insertdata($data)
   {
    echo "success";
      $this->load->database();
      return $this->db->insert('user',$data);
      
   }
   public function getdata()
   {
      $this->load->database();
      return $this->db->get('user')->result();
   }
   public function receivesegment($para)
   {
      foreach($para as $p)
      {
          echo $p.'<br>';
      }
   }
   public function editdata($sno)
   {
      $this->load->database();
      $this->db->where('sno',$sno);
      return $this->db->get('user')->result();
   }
   public function updatedata($sno,$data)
   {
      $this->load->database();
      $this->db->where('sno',$sno);
      $result=$this->db->update('user',$data);
      return $result;
   }
}
