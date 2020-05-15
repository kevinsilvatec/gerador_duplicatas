<?php
//Dados Empresa
$nomeFantasia = $_POST['nomeFantasia'];
$enderecoEmpresa = $_POST['enderecoEmpresa'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$numeroEmpresa = $_POST['numeroEmpresa'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cnpj = $_POST['cnpj'];
$inscEstadual = $_POST['inscEstadual'];
$bairroEmpresa = $_POST['bairroEmpresa'];
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
//Dados Sacado
$nomeSacado = $_POST['nomeSacado'];
$enderecoSacado = $_POST['enderecoSacado'];
$municipioSacado = $_POST['municipioSacado'];
$cepSacado = $_POST['cepSacado'];
$ufSacado = $_POST['ufSacado'];
$enderecoCobranca = $_POST['enderecoCobranca'];
$cpfSacado = $_POST['cpfSacado'];
$cnpjSacado = $_POST['cnpjSacado'];
$inscEstadualSacado = $_POST['inscEstadualSacado'];

//Conversão do valor da duplicata para valor monetário por extenso
include 'Monetario.php';
$valorDuplicata = str_replace(".", "", $valorDuplicata);
$valorDuplicata = str_replace(",", ".", $valorDuplicata);
$valorExtenso = Monetario::numberToExt($valorDuplicata);
$valorExtenso = strtoupper($valorExtenso);
$tipoDuplicata = strtoupper($tipoDuplicata);

//Geração da duplicata em .docx
include 'docxtemplate.class.php';
$docx = new DOCXTemplate('ModeloDuplicataWord.docx');
$docx -> set(array('nomeFantasia' => $nomeFantasia, 'enderecoEmpresa' => $enderecoEmpresa, 'numeroEmpresa' => $numeroEmpresa, 'bairroEmpresa' => $bairroEmpresa, 'telefone' => $telefone, 'cep' => $cep, 'cidade' => $cidade, 'uf' => $uf, 'cnpj' => $cnpj, 'inscEstadual' => $inscEstadual, 'dataEmissao' => $dataEmissao, 'valorFatura' => $valorFatura, 'numeroFatura' => $numeroFatura, 'valorDuplicataNormal' => $valorDuplicataNormal, 'numeroOrdem' => $numeroOrdem, 'dataVencimento' => $dataVencimento, 'valorDesconto' => $valorDesconto, 'valorExtenso' => $valorExtenso, 'dataLimiteDesconto' => $dataLimiteDesconto, 'condicoesEspeciais' => $condicoesEspeciais, 'nomeSacado' => $nomeSacado, 'enderecoSacado' => $enderecoSacado, 'municipioSacado' => $municipioSacado, 'cepSacado' => $cepSacado, 'ufSacado' => $ufSacado, 'enderecoCobranca' => $enderecoCobranca, 'cnpjSacado' => $cnpjSacado, 'cpfSacado' => $cpfSacado, 'inscEstadualSacado' => $inscEstadualSacado, 'tipoDuplicata' => $tipoDuplicata));

//Usando o método de Download da classe docxtemplate para baixar a duplicata pronta em arquivo Word
$docx -> downloadAs('Duplicata.docx');
?>