<?php 
class SalaVirtual 
{ 
	private $nome;
	private $pessoa; 
	private $quantidade_membros; 
	 
	public function __construct($nome, $quantidade_membros) 
	{ 
	    if (is_string($nome)) { 
	        $this->nome = $nome; 
	    } 
	    if (is_numeric($quantidade_membros) AND $quantidade_membros > 0) { 
	        $this->quantidade_membros = $quantidade_membros;
			$this->pessoa = [];
	    }

	} 
    public function __destruct() 
	{ 
	    print "<b>Destruido</b> o objeto de: {$this->nome}, com quantidade de membros: {$this->quantidade_membros} e as pessoas:<br>\n"; 
	}
	public function addPessoa($nome,$cpf,$endereco){
		$this->pessoa[] = new Pessoa($nome,$cpf,$endereco);
	}
	public function getNomeSala() 
	{ 
	    return $this->nome; 
	}
	public function getPessoa()
	{
		return $this->pessoa;
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
