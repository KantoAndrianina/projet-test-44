<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function GetUser()
        {
            $sql = "select * from Utilisateur ";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;

        }
       
        public function checkLogin($mail,$pass)
        {
            $listeUser=$this->Model->GetUser();
            $valiny = false;
             for ($i=0;$i<count($listeUser);$i++){
                if($listeUser[$i]['email'] == $mail && $listeUser[$i]['mdp']== $pass)
                {
                    $valiny = true;
                }
             }
           
            return $valiny;
        }
       
        public function listeObjet()
        {   
            $sql = "select * from userObject";
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
            $sql = "select * from userObject where idObjet='%s'";
            $sql = sprintf($sql,$id);
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;
        }
        public function listeObjetUser($id)
        {   
            $sql = "select * from userObject where idUtilisateur='%s'";
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