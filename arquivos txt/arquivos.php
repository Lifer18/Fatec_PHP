<?php
//$filename = "teste.txt";
if(!file_exists("teste.txt")){
    $handle = fopen("teste.txt", "w");
} else {
    $handle = fopen("teste.txt", "a");
}

fwrite($handle, "Conteúdo\n");
fflush($handle);
fclose($handle);

$handle = fopen("teste.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);

/*                |   r   r+   w   w+   a   a+
------------------|--------------------------
read              |   +   +        +        +
write             |       +    +   +    +   +
write after seek  |       +    +   +
create            |            +   +    +   +
truncate          |            +   +
position at start |   +   +    +   +
position at end   |                     +   + 
*/
?>