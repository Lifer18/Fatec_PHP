<?php 
class Pessoa 
{ 
	private $nome; 
	private $cpf; 
	private $endereco; 
	 
	public function __construct($nome, $cpf, $endereco) 
	{ 
	    if (is_string($nome)) { 
	        $this->nome = $nome; 
	    } 
	    if (is_numeric($cpf)) { 
	        $this->cpf = $cpf; 
	    } 
	    if (is_string($endereco)) { 
	        $this->endereco = $endereco;
	    } 
	} 

    public function __destruct() 
	{ 
	    print "{$this->nome}, com cpf: {$this->cpf}, cujo endereço é: {$this->endereco}<br>\n"; 
	}

	public function getNome() 
	{ 
	    return $this->nome; 
	} 
	public function getCpf() 
	{ 
	    return $this->cpf; 
	} 
	public function getEndereco() 
	{ 
	    return $this->endereco; 
	}
    public function setNome($nome) 
	{ 
	   $this->nome = $nome;
	}
    public function setCpf($cpf) 
	{ 
	    $this->cpf = $cpf;
	}  
    public function setEndereco($endereco) 
	{ 
        $this->endereco = $endereco;
	}    
}