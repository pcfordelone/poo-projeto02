<?php

require_once "Cliente.php";

require_once "ClientePFInterface.php";
require_once "ClientePF.php";

require_once "ClientePJInterface.php";
require_once "ClientePJ.php";


$cliente = array();
$cliente[0] = new ClientePF();
$cliente[0]
    ->setNome("Cliente01")
    ->setEmail("cliente01@")
    ->setEndereco("Rua Teste, 1000")
    ->setGrauDeImportancia(3)
    ->setTelefone("11 3333-5544")
    ->setRg("33.444.555-6")
    ->setCpf("333.444.555-66")
    ->setCobrancaEspecifica(true)
    ->setEnderecoCobranca("Rua Teste, 2000")
    ->setTipoDeCliente("Pessoa Física")
;


$cliente[1] = new ClientePJ();
$cliente[1]
    ->setNome("Empresa01")
    ->setEmail("empresa01@")
    ->setEndereco("Rua Empresa, 1000")
    ->setGrauDeImportancia(5)
    ->setTelefone("11 3333-4455")
    ->setCobrancaEspecifica(false)
    ->setCnpj("11.222.333/0001-44")
    ->setRazao("Empresa Razão")
    ->setTipoDeCliente("Pessoa Jurídica")
    ;

$cliente[2] = new ClientePJ();
$cliente[2]
    ->setNome("Empresa01")
    ->setEmail("empresa01@")
    ->setEndereco("Rua Empresa, 1000")
    ->setGrauDeImportancia(2)
    ->setTelefone("11 3333-4455")
    ->setCobrancaEspecifica(false)
    ->setCnpj("11.222.333/0001-44")
    ->setRazao("Empresa Razão")
    ->setTipoDeCliente("Pessoa Jurídica")
;

$cliente[3] = new ClientePF();
$cliente[3]
    ->setNome("Cliente03")
    ->setEmail("cliente03@")
    ->setEndereco("Rua Teste, 1000")
    ->setGrauDeImportancia(1)
    ->setTelefone("11 3333-5544")
    ->setRg("33.444.555-6")
    ->setCpf("333.444.555-66")
    ->setCobrancaEspecifica(false)
    ->setTipoDeCliente("Pessoa Física")
;

$cliente[4] = new ClientePF();
$cliente[4]
    ->setNome("Cliente04")
    ->setEmail("cliente04@")
    ->setEndereco("Rua Teste, 1000")
    ->setGrauDeImportancia(5)
    ->setTelefone("11 3333-5544")
    ->setRg("33.444.555-6")
    ->setCpf("333.444.555-66")
    ->setCobrancaEspecifica(true)
    ->setEnderecoCobranca("Rua Teste, 2000")
    ->setTipoDeCliente("Pessoa Física")
;

$cliente[5] = new ClientePF();
$cliente[5]
    ->setNome("Cliente05")
    ->setEmail("cliente05@")
    ->setEndereco("Rua Teste, 1000")
    ->setGrauDeImportancia(4)
    ->setTelefone("11 3333-5544")
    ->setRg("33.444.555-6")
    ->setCpf("333.444.555-66")
    ->setCobrancaEspecifica(true)
    ->setEnderecoCobranca("Rua Teste, 2000")
    ->setTipoDeCliente("Pessoa Física")
;

$cliente[6] = new ClientePJ();
$cliente[6]
    ->setNome("Empresa02")
    ->setEmail("empresa02@")
    ->setEndereco("Rua Empresa, 1000")
    ->setGrauDeImportancia(3)
    ->setTelefone("11 3333-4455")
    ->setCobrancaEspecifica(true)
    ->setEnderecoCobranca("Rua Empresa Cobr, 1500")
    ->setCnpj("11.222.333/0001-44")
    ->setRazao("Empresa Razão")
    ->setTipoDeCliente("Pessoa Jurídica")
;

$cliente[7] = new ClientePJ();
$cliente[7]
    ->setNome("Empresa03")
    ->setEmail("empresa03@")
    ->setEndereco("Rua Empresa, 1000")
    ->setGrauDeImportancia(2)
    ->setTelefone("11 3333-4455")
    ->setCobrancaEspecifica(false)
    ->setCnpj("11.222.333/0001-44")
    ->setRazao("Empresa Razão")
    ->setTipoDeCliente("Pessoa Jurídica")
;

$cliente[8] = new ClientePJ();
$cliente[8]
    ->setNome("Empresa04")
    ->setEmail("empresa04@")
    ->setEndereco("Rua Empresa, 1000")
    ->setGrauDeImportancia(5)
    ->setTelefone("11 3333-4455")
    ->setCobrancaEspecifica(false)
    ->setCnpj("11.222.333/0001-44")
    ->setRazao("Empresa Razão")
    ->setTipoDeCliente("Pessoa Jurídica")
;

$cliente[9] = new ClientePF();
$cliente[9]
    ->setNome("Cliente01")
    ->setEmail("cliente01@")
    ->setEndereco("Rua Teste, 1000")
    ->setGrauDeImportancia(5)
    ->setTelefone("11 3333-5544")
    ->setRg("33.444.555-6")
    ->setCpf("333.444.555-66")
    ->setCobrancaEspecifica(true)
    ->setEnderecoCobranca("Rua Teste, 2000")
    ->setTipoDeCliente("Pessoa Física")
;

if (!isset($_GET['ordem'])) {
    ksort($cliente);
} elseif ($_GET['ordem'] == "descrescente") {
    krsort($cliente);
} else {
    ksort($cliente);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3>Lista de Clientes</h3>

            <?php if (!isset($_GET['id'])) : ?>

            <div class="btn-group btn-group-xs">

                <a href="/?ordem=crescente" class="btn btn-default">
                    <em class="glyphicon glyphicon-arrow-down"></em>
                    Ordem Crescente
                </a>
                
                <a href="/?ordem=descrescente" class="btn btn-default">
                    <em class="glyphicon glyphicon-arrow-up"></em>
                    Ordem Decrescente
                </a>

            </div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome / Empresa</th>
                    <th>E-mail</th>
                    <th>Tipo de Cliente</th>
                </tr>
                </thead>
                <tbody>
                <?php $x=0; foreach ($cliente as $key => $value) : ?>
                <tr>
                    <td><?php echo $key+=1; ?></td>
                    <td><a href="/?id=<?php echo $key?>"><?php echo $value->getNome(); ?></a></td>
                    <td><?php echo $value->getEmail(); ?></td>
                    <td><?php echo $value->getTipoDeCliente() ?></td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>

            <?php

            elseif ($_GET['id'] <= count($cliente)) :
                $id = $_GET['id']; $id -= 1;
            ?>
                <p><b>Nome: </b><?php echo $cliente[$id]->getNome() ?></p>
                <p><b>E-mail: </b><?php echo $cliente[$id]->getEmail() ?></p>
                <p><b>Endereço: </b><?php echo $cliente[$id]->getEndereco() ?></p>
                <p><b>Telefone: </b><?php echo $cliente[$id]->getTelefone() ?></p>
                <p><b>PF ou PJ: </b><?php echo $cliente[$id]->getTipoDeCliente() ?></p>
                <p><b>Importância: </b>
                    <?php for ($i=0;$i<$cliente[$id]->getGrauDeImportancia();$i++) : ?>
                        <span class="glyphicon glyphicon-star"></span>
                    <?php endfor ?>
                </p>
                <p><b>Endereço de Cobrança: </b>
                    <?php
                        if ($cliente[$id]->getEnderecoCobranca()) {
                            echo $cliente[$id]->getEnderecoCobranca();
                        } else {
                            echo $cliente[$id]->getEndereco();
                        }
                    ?>
                </p>

                <?php if ($cliente[$id]->getTipoDeCliente() == "Pessoa Física") : ?>
                    <p><b>CPF: </b><?php echo $cliente[$id]->getCPF() ?></p>
                    <p><b>RG: </b><?php echo $cliente[$id]->getRG() ?></p>
                <?php else : ?>
                    <p><b>CNPJ: </b><?php echo $cliente[$id]->getCNPJ() ?></p>
                    <p><b>Razão Social: </b><?php echo $cliente[$id]->getRazao() ?></p>
                <?php endif ?>
                <a href="/">Voltar</a>

            <?php else : ?>
                <p><b>Cliente não encontrado.</b></p>
                <a href="/">Voltar</a>

            <?php endif ?>

        </div>
    </div>
</div>
</body>
</html>
