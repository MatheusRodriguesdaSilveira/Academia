<?php

    include_once 'conexao.php';

    class Cliente

    {   

        private $NOME_CLIENTE, $FONE_CLIENTE, $EMAIL_CLIENTE, $PASS_CLIENTE;
    
        //=================NOME_CLIENTE======================

        public function getNOME_CLIENTE()
		{
			return $this->NOME_CLIENTE;
		}

		public function setNOME_CLIENTE($NOME_CLIENTE)
		{
			$this->NOME_CLIENTE = $NOME_CLIENTE;
		}

        //===================FONE_CLIENTE=====================

        public function getFONE_CLIENTE()
		{
			return $this->FONE_CLIENTE;
		}

		public function setFONE_CLIENTE($FONE_CLIENTE)
		{
			$this->FONE_CLIENTE = $FONE_CLIENTE;
		}


         //===================EMAIL_CLIENTE=====================

         public function getEMAIL_CLIENTE()
         {
             return $this->EMAIL_CLIENTE;
         }
 
         public function setEMAIL_CLIENTE($EMAIL_CLIENTE)
         {
             $this->EMAIL_CLIENTE = $EMAIL_CLIENTE;
         }
        //==================PASS_CLIENTE===================

        public function getPASS_CLIENTE()
		{
			return $this->PASS_CLIENTE;
		}

		public function setPASS_CLIENTE($PASS_CLIENTE)
		{
			$this->PASS_CLIENTE = $PASS_CLIENTE;
		}

        //===========conexao==============

        public function Cadastrar()
        {

            $bd = new conexao();
            $con = $bd->getconexao();

            $sql = "INSERT INTO  cliente (NOME_CLIENTE,FONE_CLIENTE,EMAIL_CLIENTE,PASS_CLIENTE) VALUES (?,?,?,?);"; 

            $stm = $con->prepare($sql);
            $stm->bindValue(1, $this->NOME_CLIENTE);
            $stm->bindValue(2, $this->FONE_CLIENTE);
            $stm->bindValue(3, $this->EMAIL_CLIENTE);
            $stm->bindValue(4, $this->PASS_CLIENTE);

            $stm->execute();
        
            return $stm->rowCount();

        }

        //===========pesquisar==============
        
         public function Pesquisar()
        {

            $bd = new conexao();
            $con = $bd->getconexao();

            $sql = "Select * from c_cliente"; 

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
    
            $sql = "delete from c_cliente where NOME_CLIENTE = ?";
    
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $this->NOME_CLIENTE);
    
            $stm->execute();
            return $stm->rowCount();
        
    }

    }
?>