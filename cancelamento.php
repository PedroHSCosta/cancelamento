<?php
session_start();
//print_r($_SESSION);

if(!isset($_SESSION["logado"])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelamento</title>


    <style>
         
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(60deg, #1E90FF, #00BFFF);
        }

        button{
            background-color: #FF0000;
            border: none; 
            padding: 10px;
            width: 60px;
            border-radius: 4px;
            transition: .5s;
        }
    
        button:hover{
            background-color: #8B0000;
            transition: .5s;
            color: white;
            width: 80px;
        }

    </style>

</head>
<body>
    <div>

        <div>
            <?php
            echo($_SESSION["logado"]);

            ?>
            <br><br>
            <a href="sair.php"><button>sair</button></a>
        </div>    
        <br>
        <div>
            
            <form method="GET" action="receberDados.php">

            
            <input type="text" placeholder="Cilente" name="cliente">
            <br>
            <input type="text" placeholder="CPF" name="cpf">
            <br>
            <input type="text" placeholder="Telefone" name="telefone">
            <br>
            <input type="text" placeholder="n° do pedido" name="npedido">
            <br>
            <input type="text" placeholder="Loja de compra" name="lojacomp">
            <br>
            <input type="text" placeholder="Loja de saida" name="lojasaida">
            <br>
            <input type="text" placeholder="Loja de destino" name="lojadest">
            <br>
            <input type="date" placeholder="Data de compra" name="datacomp">
            <br>
            <select name="motivo do cancelamento">
                <option values="erro de estoque">motivo do cancelamento</option>
                <option values="atraso na transferencia">atraso na transferencia</option>
                <option values="defeito de fabrica">defeito de fabrica</option>
                <option values="erro da empresa">erro da empresa</option>
                <option values="erro da entrega">erro da entrega</option>
                <option values="erro da montagem">erro da montagem</option>
                <option values="erro de estoque">erro de estoque</option>
            </select>
            <br>
            <input type="text" placeholder="observação" name="ob">
            <br>
            <input type="text" placeholder="endereço" name="end">
            <br>
            <input type="text" placeholder="ponto de referencia" name="pontref">
            
            <div>
            <select name="plano">
            <option values="plano">plano</option>    
            <option values="financeira">financeira</option>
            <option values="cartão">cartao</option>
            <option values="crediario">crediario</option>
            <option values="dinheiro">dinheiro</option>
            </select>
            <input type="text" placeholder="n° de autorização" name="auto">
            </div>
            <input type="text" placeholder="valor cancelamento" name="valorCamc">
            <br>
            <input type="text" placeholder="valor à faturar" name="valorFat">
            <br>
            <label>faturar nova venda</label>
            <br>
            <input type="radio" id="html" name="novaVenda" value="sim">sim
            <input type="radio" id="html" name="novaVenda" value="sim">nao
            <br>
            <label>reembolso</label>
            <br>
            <input type="radio" id="html" name="reembolso" value="sim">sim
            <input type="radio" id="html" name="reembolso" value="sim">nao
            <br>
            <label>produto saiu da loja</label>
            <br>
            <input type="radio" id="html" name="saida" value="sim">sim
            <input type="radio" id="html" name="saida" value="sim">nao
            <br>
            <label>produto montado/usado</label>
            <br>
            <input type="radio" id="html" name="mont" value="sim">sim
            <input type="radio" id="html" name="mont" value="sim">nao
            <br>
            <label>advertencia ao funcionario</label>
            <br>
            <input type="radio" id="html" name="advert" value="sim">sim
            <input type="radio" id="html" name="advert" value="sim">nao
            <br>
            <label>erro de estoque L.C ou L.S</label>
            <br>
            <input type="radio" id="html" name="erroEst" value="sim">sim
            <input type="radio" id="html" name="erroEst" value="sim">nao
            <br>
            <label>cupom emitido</label>
            <br>
            <input type="radio" id="html" name="cupom" value="sim">sim
            <input type="radio" id="html" name="cupom" value="sim">nao
            <br>
            <label>cupom enviado p/devolução</label>
            <br>
            <input type="radio" id="html" name="cupomEnv" value="sim">sim
            <input type="radio" id="html" name="cupomEnv" value="sim">nao
            <br>
            <label>houve recolhimento</label>
            <br>
            <input type="radio" id="html" name="rec" value="sim">sim
            <input type="radio" id="html" name="rec" value="sim">nao
            <br>
            




            </form>
            
        </div>







        <br>
        
    
        <h1>
        
        <?php
        // echo(md5("123"));
        ?>


        </h1>

    </div>
    
        
</body>
</html>