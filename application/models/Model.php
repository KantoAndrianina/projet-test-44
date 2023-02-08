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
        public function getAdmin()
        {
            $sql = "select * from Utilisateur where administrateur= 1";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;

        }
        public function checkAdmin($mail)
        {
            $admin=$this->Model->getAdmin();
            $valiny = false;
                if($mail == $admin[0]['email'])
                {
                    $valiny = true;
                }
           
            return $valiny;
        }
       
        public function listeObjet()
        {   
            $sql = "select o.idutilisateur, o.idObjet, o.nomobjet, o.descriptions, o.imgMain, o.img1, o.img2, o.img3, o.prix, o.categorie, u.nom, u.email, u.mdp
            from Objects o 
            join Utilisateur u on o.idUtilisateur=u.idUtilisateur";
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
            $sql = "select o.idutilisateur, o.idObjet, o.nomobjet, o.descriptions, o.imgMain, o.img1, o.img2, o.img3, o.prix, o.categorie, u.nom, u.email, u.mdp
            from Objects o 
            join Utilisateur u on o.idUtilisateur=u.idUtilisateur where idObjet='%s'";
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
            $sql = "select o.idutilisateur, o.idObjet, o.nomobjet, o.descriptions, o.imgMain, o.img1, o.img2, o.img3, o.prix, o.categorie, u.nom, u.email, u.mdp
            from Objects o 
            join Utilisateur u on o.idUtilisateur=u.idUtilisateur where u.email='%s'";
            $sql = sprintf($sql,$id);
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;
        }
        public function countUser()
        {   
            $sql = 'select count(idUtilisateur) as User from Utilisateur where administrateur= 0';
            $query=$this->db->query($sql);
            $row=$query->row_array();
            return $row['User'];
        }
        public function getCategorie()
        {
            $sql = "select categorie from Objects";
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