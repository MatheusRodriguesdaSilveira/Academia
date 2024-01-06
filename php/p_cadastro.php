<?php
                             // ESSA DAQUI SE REFERE A TABELA DE TREINADORES
    include_once 'conexao.php';

    class Treinador

    {   

        private $t_name, $t_phone, $t_email, $t_esp;
    
        //=================t_name======================

        public function gett_name()
		{
			return $this->t_name;
		}

		public function sett_name($t_name)
		{
			$this->t_name = $t_name;
		}

        //===================t_phone=====================

        public function gett_phone()
		{
			return $this->t_phone;
		}

		public function sett_phone($t_phone)
		{
			$this->t_phone = $t_phone;
		}


         //===================t_email=====================

         public function gett_email()
         {
             return $this->t_email;
         }
 
         public function sett_email($t_email)
         {
             $this->t_email = $t_email;
         }

        //==============t_esp==============

        public function gett_esp()
		{
			return $this->t_esp;
		}

		public function sett_esp($t_esp)
		{
			$this->t_esp = $t_esp;
		}

        //===========conexao==============

        public function Inserir()
        {

            $bd = new conexao();
            $con = $bd->getconexao();

            $sql = "insert into treinador (t_name,t_phone,t_email,t_esp) values (?,?,?,?);"; 

            $stm = $con->prepare($sql);
            $stm->bindValue(1, $this->t_name);
            $stm->bindValue(2, $this->t_phone);
            $stm->bindValue(3, $this->t_email);
            $stm->bindValue(4, $this->t_esp);

            $stm->execute();
        
            return $stm->rowCount();
        }

        //===========pesquisar==============
        
         public function Pesquisar()
        {

            $bd = new conexao();
            $con = $bd->getconexao();

            $sql = "Select * from t_treinador"; 

            $stm = $con->prepare($sql);
            $stm->execute();

            if($stm->rowCount()>0){
                $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            }
        }

        //============Apagar====================

        public function Apagar()
        {
            $bd = new conexao();
            $con = $bd->getconexao();
    
            $sql = "delete from t_treinador where t_name = ?";
    
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $this->t_name);
    
            $stm->execute();
            return $stm->rowCount();
        
    }

    }

?>