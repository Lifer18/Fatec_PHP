<?php 
require_once 'pessoa.php';
require_once 'salavirtual.php';

$sv1 = new SalaVirtual('Matematica',5);
$sv2 = new SalaVirtual('Portugues',3);
$sv3 = new SalaVirtual('Historia',2);

$sv1->addPessoa('Fernando', 11122233345, "Rua teste, 189 - Araras"); 
$sv1->addPessoa('Gabriel', 12345678900, "Rua teste2, 321 - Araras"); 
$sv1->addPessoa('Mateus', 11122233345, "Rua teste3, 687 - Araras"); 
$sv1->addPessoa('Carol', 11122233345, "Rua teste4, 179 - Conchal"); 
$sv1->addPessoa('Luiza', 11122233345, "Rua teste5, 265 - Araras");

$sv2->addPessoa('Jorge', 11122233345, "Rua teste6, 189 - Araras"); 
$sv2->addPessoa('Cleber', 12345678900, "Rua teste7, 321 - Araras"); 
$sv2->addPessoa('Pedro', 11122233345, "Rua teste8, 687 - Araras"); 

$sv3->addPessoa('Mariana', 11122233345, "Rua teste9, 189 - Araras"); 
$sv3->addPessoa('Giovana', 12345678900, "Rua teste10, 321 - Araras"); 



print '<br>Sala 3 trocada de: Historia, para: Geografia <br><br>';
$sv3->setNome('Geografia');


for($i=1;$i<=3;$i++){

	print '<b>Nome da '.$i.'ª sala: '.${'sv'.$i}->getNomeSala().'</b><br>'.PHP_EOL; 
	print 'Quantidade de pessoas da '.$i.'ª sala: '.${'sv'.$i}->getQuantidade_membros().'<br>'.PHP_EOL; 
	print 'Alunos: <br><br>'.PHP_EOL;	
	$j = 1;
	foreach(${'sv'.$i}->getPessoa() as $p){
		print 'Nome da '.$j.'ª pessoa : '.$p->getNome().'<br>'.PHP_EOL;
		print 'CPF da '.$j.'ª pessoa : '.$p->getCpf().'<br>'.PHP_EOL;
		print 'Endereco da '.$j.'ª pessoa : '.$p->getEndereco().'<br><br>'.PHP_EOL;
		$j++;
	}
	print '<br>'.PHP_EOL;

}

print 'DESTRUINDO OS OBJETOS <br><br>'.PHP_EOL;

unset($sv1);
unset($sv2);
unset($sv3);
