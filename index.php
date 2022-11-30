<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(60deg, green, yellow);
        }

        div{
            background-color:rgba(0, 0, 0, .7);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 100px 50px;
            border-radius: 15px;
            color:white;
        }

        input{
            padding: 10px;
            border: none;
            outline: none;
        }

        button{
            background-color: #00BFFF;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 2px;
        }

        button:hover{
            background-color: green;
            transition: .5s;
            color: white;
        }
    </style> 
</head>
<body>
    <div>
        <form method="POST" action="receberDados.php">
        <h1>Login</h1>
        <input type="text" placeholder="Nome" name="nome">
        <br><br>
        <input type="password" placeholder="Senha" name="senha">
        <br><br>
        <button>Confirmar</button>
    </form>
    </div>
</body>
</html>