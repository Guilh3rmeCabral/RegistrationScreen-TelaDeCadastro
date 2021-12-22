# RegistrationScreen-TelaDeCadastro
<h1>Projeto realizado para fins de estudo, autoanálise e absorção do meu aprendizado no estágio (decorrente)</h1>
<p>O projeto ainda está em andamento, já já teremos novos commits ^^</p>

<h2>Aqui está o desenvolvimento de uma tela de cadastro</h2>
   <h3>Ferramentas e linguagens utilizados:</h3>
   <p>Framework Laravel 8</p>
   <p>Php</p>
   <p>IDE: Php Storm</p>
   <p>BD: MySql</p>

<h2>Para que consigam testar na maquina de vocês recomendo fazer as instalações a seguir:</h2>
<p><a href="https://getcomposer.org/download/">Composer</a> -> Pode ser feito através do command-line ou por .exe</p>
<p><a href="https://www.apachefriends.org/download.html">XAMPP</a> -> Para rodar no mesmo programa que utilizei</p>
<p><a href="https://nodejs.org/en/download/">Node.Js</a> -> Para poder instalar as pendência e no terminal do projeto digite npm install</p>

<h2>Integração programa e banco de dados:</h2>
<p><a href="https://prnt.sc/241ns9t">Imagem para demonstrar</a> -> Depois de instalado o Xampp vamos rodar ele, para isso preciso que clique em start no Apche e no MySql, em seguida clique em admin do MySql</p>
<p><a href="https://prnt.sc/241n1km">Imagem para demonstrar</a> -> Ele vai abrir o navegador e no canto esquerdo vai aparecer uma opção de criar um novo banco, clicando nele digite o nome do seu banco e execute <- <a href="https://prnt.sc/241omr6">Imagem para demonstrar</a></p>
<p>Depois de realizar esses passos vamos para o código na IDE de preferência</p>

<h2>No seu arquivo .env altere as seguintes informações de acordo com as do seu BANCO DE DADOS:</h2>
<p>
DB_CONNECTION=mysql
<br>
DB_HOST=127.0.0.1
<br>
DB_PORT=3306
<br>
DB_DATABASE=cadastrousers
<br>
DB_USERNAME=root
<br>
DB_PASSWORD=
</p>

<p>Feito isso vamos para o proximo passo</p>

<h2>No terminal da IDE digite:</h2>
<p>php artisan migrate -> Ele vai fazer todas as migrações que estão no seu código para o banco de dados</p>
<p>OBSERVAÇÃO: Antes certifique de estar na pasta real do projeto que é: TelaDeCadastro</p> 

<p>A seguir digite: php artisan serve -> vai iniciar um servidor local para rodar o projeto</p>
<p>Agora aperte ctrl + clique (Win e Linux) ou command + clique (Mac)</p>

<p>Agora é só testar entrando nesta rota http://localhost/cadastro-user</p>

<h2>Visualização do projeto através do vídeo</h2>
<p><a href="https://drive.google.com/file/d/1qgbY0owkNUCfISvaH5907YUvQjPJbz0O/view?usp=sharing">Vídeo via Driver</a> -> Vídeo(1) projeto funcinando</p>
<p><a href="https://drive.google.com/file/d/1qVCbeHr8CPsE81vIbAeSozvahVucaPh8/view?usp=sharing">Vídeo via Driver</a> -> Vídeo(2) projeto funcinando</p>
