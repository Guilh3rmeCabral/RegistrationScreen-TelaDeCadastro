<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro De Usuário</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    *{
        margin: 0;
        padding: 0;
    }

    body{
        width: 100%;
        height: 100vh;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(-45deg, #ffce41, #ff7253, #fd5754);
    }
    #form{
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #ffffff;
        border-radius: 10px;
        padding: 60px;
        width: min-content;
        align-items: center;
        color: #2b344b;
        animation: iniciar 1.6s ease-out;
        pointer-events: all;
    }
    .title{
        font-size: 1.8em;
        margin-bottom: 10%;
    }
    .input{
        min-width: 280px;
        border-radius: 22px;
        border: 2px #6f7e8a solid;
        padding: 5px;
        margin: 0px 0px 12px -5px;
    }
    .input i{
        font-size: 1.2em;
        padding: 5px;
        background: -webkit-linear-gradient(-45deg, #ffce41, #ff7253, #fd5754);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .input input{
        width: 80%;
        border: none;
        outline: none;
        font-family: 'Poppins', sans-serif;
        transform: translateY(-10%);
        color: #2b344b;
        font-size: 11pt;
    }
    #btn{
        margin-top: 10%;
        width: 100%;
        text-align: center;
    }
    #btn button{
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(-45deg, #ffce41, #ff7253, #fd5754);
        width: 100%;
        height: 40px;
        border: none;
        font-size: 1.2em;
        color: #ffffff;
        border-radius: 20px;
        outline: none;
        cursor: pointer;
    }
    #btn button:hover{
        background: linear-gradient(-45deg, #eec04c, #ec7054, #ee5a54);
    }
    @keyframes iniciar{
        0%{
            top: -20%;
            opacity: 0;
            pointer-events: none;
        }
        100%{
            top: 50%;
            opacity: 100%;
            pointer-events: all;
        }
    }

</style>
<body>
    <div id="form">
        <form action="{{route('users.cadastrostore')}}" method="post">
            @csrf
            <h2 class="title">Cadastrar Usuário</h2>
            <label for="name">Nome</label>
            <div class="input">
                <input id="name" name="name" placeholder="Username" type="text">
            </div>

            <label for="email">E-mail</label>
            <div class="input">
                <input id="email" name="email" placeholder="Email" type="email">
            </div>

            <label for="password">Senha</label>
            <div class="input">
                <input id="password" name="password" placeholder="Password" type="password">
            </div>
            <div id="btn">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>
