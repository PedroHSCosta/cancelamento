<?php
$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


if(!empty($nome) && !empty($senha)){
    require("conexao.php");
    $sql=$pdo->prepare("SELECT * FROM login WHERE nome = ? AND senha = ?");
    $sql->bindParam(1,$nome,PDO::PARAM_STR);
    $sql->bindParam(2,$senha,PDO::PARAM_STR);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    
    
    if($nome==$result["nome"] && $senha==$result["senha"]){
        session_start();
        $_SESSION["logado"]=$result["nome"];
        Header("Location:Cancelamento.php");
    }else{
        Header("Location:index.php");
    }

}else{

    Header("Location:index.php");

}

?>