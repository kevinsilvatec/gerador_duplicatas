<?php

//Dados Empresa 
$nomeFantasia = $_POST['nomeFantasia'];
$enderecoEmpresa = $_POST['enderecoEmpresa'];
$telefone = $_POST['telefone'];
$numeroEmpresa = $_POST['numeroEmpresa'];
$cep = $_POST['cep'];
$bairroEmpresa = $_POST['bairroEmpresa'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cnpj = $_POST['cnpj'];
$inscEstadual = $_POST['inscEstadual'];

//Dados Duplicata 
$valorFatura = $_POST['valorFatura'];
$numeroFatura = $_POST['numeroFatura'];
$valorDuplicataNormal = $_POST['valorDuplicata'];
$valorDuplicata = $_POST['valorDuplicata'];
$numeroOrdem = $_POST['numeroOrdem'];
$dataVencimento = $_POST['dataVencimento'];
$dataEmissao = $_POST['dataEmissao'];
$tipoDuplicata = $_POST['tipoDuplicata'];
$valorDesconto = $_POST['valorDesconto'];
$dataLimiteDesconto = $_POST['dataLimiteDesconto'];
$condicoesEspeciais = $_POST['condicoesEspeciais'];

include "../Etapa3.php";

?>