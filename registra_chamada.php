
<?php 
/*print_r($_POST);*/

$arquivo=fopen("arquivo.hd","a");
/* aqui abrimos o arquivo.hd onde os dados serao armazenados no final do arquivo e nao serao apagados */



$titulo=str_replace('#','-',$_POST['titulo']);          
$categoria=str_replace('#','-',$_POST['categoria']);    /*   |  criamos variaveis para trocar o # por        | */
$descricao=str_replace('#','-',$_POST['descricao']);    /*   |  - para se alguem escrever # não der problema | */ 


/*criamos uma variavel "texto" para guarda a informaçao # e concatenamos as variaves 
dentro da variavel texto / o PHP_EOL para ficar um em baixo do outro*/
$texto =$titulo .'#'. $categoria .'#'. $descricao. PHP_EOL;


fwrite($arquivo,$texto);/*escreve o conteudo do texto no arquivo*/
 
/*echo $texto;*/


fclose($arquivo);/*ele fecha o arquivo que abrimos que foi o fopen */


header('Location: abrir_chamado.php')/*redirecionamos o navegador para a pagina abrir_chamado.php*/

?>