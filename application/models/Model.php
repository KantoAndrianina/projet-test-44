<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
       
        public function checkLogin($mail,$pass)
        {
            $valiny = false;
            if($mail == 'azerty@gmail.com' && $pass == 'ok')
            {
                $valiny = true;
            }
            return $valiny;
        }
        public function listeObjet()
        {   
            $sql = "select * from objects";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;
        }
    }
?>