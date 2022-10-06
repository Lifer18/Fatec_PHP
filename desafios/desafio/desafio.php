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
	    print "Destruido o objeto de: {$this->nome}, com cpf: {$this->cpf}, cujo endereço é: {$this->endereco}<br>\n"; 
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

class SalaVirtual 
{ 
	private $nome; 
	private $quantidade_membros; 
	 
	public function __construct($nome, $quantidade_membros) 
	{ 
	    if (is_string($nome)) { 
	        $this->nome = $nome; 
	    } 
	    if (is_numeric($quantidade_membros) AND $quantidade_membros > 0) { 
	        $this->quantidade_membros = $quantidade_membros; 
	    }
	} 
    public function __destruct() 
	{ 
	    print "Destruido o objeto de: {$this->nome}, com quantidade de membros: {$this->quantidade_membros}<br>\n"; 
	}
	public function getNome() 
	{ 
	    return $this->nome; 
	} 
	public function getQuantidade_membros() 
	{ 
	    return $this->quantidade_membros; 
	} 
    public function setNome($nome) 
	{ 
	   $this->nome = $nome;
	}
    public function setQuantidade_membros($quantidade) 
	{ 
	    $this->quantidade_membros = $quantidade;
	} 
}

$p1 = new Pessoa('Fernando', 11122233345, "Rua teste, 189 - Araras"); 
$p2 = new Pessoa('Gabriel', 12345678900, "Rua teste2, 321 - Araras"); 
$p3 = new Pessoa('Mateus', 11122233345, "Rua teste3, 687 - Araras"); 
$p4 = new Pessoa('Carol', 11122233345, "Rua teste4, 179 - Conchal"); 
$p5 = new Pessoa('Luiza', 11122233345, "Rua teste5, 265 - Araras"); 

$sv1 = new SalaVirtual('Matematica',40);
$sv2 = new SalaVirtual('Portugues',38);
$sv3 = new SalaVirtual('Historia',42);


for($i=1;$i<=5;$i++){

print 'Nome da '.$i.'ª pessoa: '.${'p'.$i}->getNome().'<br>'.PHP_EOL; 
print 'CPF da '.$i.'ª pessoa: '.${'p'.$i}->getCpf().'<br>'.PHP_EOL; 
print 'Endereco da '.$i.'ª pessoa: '.${'p'.$i}->getEndereco().'<br><br><br>'.PHP_EOL; 

}

print '<br>Sala 3 trocada de: Historia, para: Geografia <br><br>';

$sv3->setNome('Geografia');
for($i=1;$i<=3;$i++){

	print 'Nome da '.$i.'ª sala: '.${'sv'.$i}->getNome().'<br>'.PHP_EOL; 
	print 'Quantidade de pessoas da '.$i.'ª sala: '.${'sv'.$i}->getQuantidade_membros().'<br><br><br>'.PHP_EOL; 
	
}