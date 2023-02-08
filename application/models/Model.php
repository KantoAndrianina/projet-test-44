<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function GetUser($mail,$pass)
        {
            $sql = "select * from Utilisateur ";
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return $result;

        }
       
        public function checkLogin($mail,$pass)
        {
            $listeUser=$this->Model->GetUser();
            $valiny = false;
             for ($i=0;$i<count($listeUser);$i++){
                if($mail == $listeUser[$i] ['email'] && $pass == $listeUser[$i] ['mdp'])
                {
                    $valiny = true;
                }
             }
           
            return $valiny;
        }
       
        public function listeObjet()
        {   
            $sql = "select * from Objects";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;
        }
        public function listeObjetById($id)
        {   
            $sql = "select * from Objects where idObjet='%s'";
            $sql = sprintf($sql,$id);
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