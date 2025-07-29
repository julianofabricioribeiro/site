<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];


$efc = $_POST["efc"];
$emc = $_POST["emc"];
$esc = $_POST["esc"];
$pgc = $_POST["pgc"];
$mc = $_POST["mc"];

$mc = $_POST["empresa"];
$mc = $_POST["data_admissao"];
$mc = $_POST["data_demissao"];
$mc = $_POST["atividade_exercida"];

$descricao = $_POST["descricao"];
$horas = $_POST["horas"];
$ano_conclusao = $_POST["conclusao"];

$informacoes = $_POST["informacoes"];

echo "DADOS PESSOAIS"
echo $nome;
echo $telefone;
echo $email;
echo $endereco;
echo "ESCOLARIDADE";
echo $efc;
echo $emc;
echo $esc;
echo $pgc;
echo $mc;
echo "EXPERIENCIA PROFISSIONAL"
echo $data_emissao;
echo $atividade_exercidada;
echo "CURSOS E IDIOMAS" ;
echo $descricao;
echo $horas;
echo $ano_conclusao;
echo "INFORMAÇÕES ADICIONAIS";
echo $informacoes;
 

?>

