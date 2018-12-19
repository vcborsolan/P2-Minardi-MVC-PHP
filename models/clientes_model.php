<?php

class Clientes_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
    
	public function lista() 
    {  
        $result=$this->db->select('select trim(cpf)as cpf,nome,email from cliente order by nome');
		
        //print_r($result);
        
		
		$result = json_encode($result);
		
		
		echo $result;
    }
	

    public function insert() 
    {
        $cpf    = $_POST['txtcpf'];
        $nome   = $_POST['txtnome'];
        // $end = $_POST['txtend'];
        $fone   = $_POST['txtfone'];
        $rua = $_POST['txtrua'];
        $email = $_POST['txtemail'];
        $bairro = $_POST['txtbairro'];
        $cep = $_POST['txtcep'];
        
        $this->db->insert('cliente', array('cpf'=>$cpf,'nome'=>$nome,'telefone'=>$fone,'rua'=>$rua,'email'=>$email,'bairro'=>$bairro,'cep'=>$cep));
       
        echo "Dados Inseridos com Sucesso";
    }
	
	public function del() 
    {  
		//o codigo deve ser um inteiro
		$cpf=(int)$_POST['cpf'];
		
        $this->db->delete('cliente',"cpf='$cpf'");
	}
	
	public function loadData() 
    {  
		//o codigo deve ser um inteiro
		$cpf=(int)$_POST['cpf'];
		
         $result=$this->db->select('select trim(cpf)as cpf,nome,email from cliente where cpf=:cpf',array(":cpf"=>$cpf));
		$result = json_encode($result);
		echo($result);
	}
	
	
	public function save() 
    {
        // $codigo = $_POST['txtcod'];
        $cpf    = $_POST['txtcpf'];
        $nome   = $_POST['txtnome'];
        // $end    = $_POST['txtend'];
        $fone   = $_POST['txtfone'];
        $senha  = $_POST['txtsenha'];
        $rua = $_POST['txtrua'];
        $email = $_POST['txtemail'];
        $bairro = $_POST['txtbairro'];
        $cep = $_POST['txtcep'];
		
		$dadosSave=array('cpf'=>$cpf,'nome'=>$nome,'telefone'=>$fone,'rua'=>$rua,'email'=>$email,'bairro'=>$bairro,'cep'=>$cep);
        
       $this->db->update('cliente', $dadosSave,"cpf='$cpf'");
       echo "Dados gravados com Sucesso";
	   
    }
}