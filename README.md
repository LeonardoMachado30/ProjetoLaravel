# ProjetoLaravel
 Aprendendo Laravel framework

 <h2>Introdução</h2>

Aprendendo e aprimorando as habilidades com o framework Laravel, construindo o primeiro WebSite em Laravel, entendo o Fomato MVC, conhecendo a estrutura e praticando a sintaxe, metodos, rotas, entre outros.

<h2>Aprendizado</h2>

1. Baixando arquivos e configurando ambiente de trabalho, usando **VSCode** como editor, **Composer** como terminal, **XAMP** como container, **Laravel Fremework** como linguagem e **MySQL** como banco de dados.

    1. Para ver o conteudo e necessario: Laravel Framework, Composer, XAMP (ou equivalente), VSCode (ou equivalente).

2. Criando **Hello World** no arquivo **"Welcome"** conhecendo os componentes do Laravel como views e rotas.
    1. iniciar servidor com **'php artisan serve'**.

3. Aprendendo **Rotas** no arquivo **"Routes/Web"** e passando valores e variaveis para serem impressos na tela.

4. Criando if, else, for, foreach usando a estrutura blade, incluindo comentarios fora do html.

5. Criando Layouts para evitar repeticão de codigo, usando o comando **@section** e **@export** para definir o caminho do layout **"view/layouts/main"**.

6. Parametros nas rotas de forma obrigatoria e opcional.
    1. Obrigatoria: Passa o id para a rota.
    2. Opcional: Passa o id e um valor pre-definido usando **"?"**.

7. **Controllers**, usando padrão Laravel para manipular as rotas pelo Controllers de forma que o arquio **'Route'** fique limpo.
    1. Comando: php artisan make:Controllers.

8. Introdução Conexão com banco de dados, usando **ORM** chamada **Eloquent** e criação de tabelas as **migrations**, versionamento de banco de dadso, avançar, retroceder o banco, fazer setup de DB, e verificando status de migrations.
    1. Comando: php artisan magrate (iniciar).
    2. Comando: php artisan make:migration create_produtcts_table (Insert).
    3. Comando: php artisan migrate:status (Select).
    4. Comando: php artisan migrate:fresh (Update).
    5. Conectar banco de dados no arquivo **.env**.

9. **Eloquent**, criando tabelas no **Model**, criando tabelas no **phpMyAdmin**, recebendo dados do banco de dados e **imprimindo** na pagina **"welcome"**.
    1. Model singular.
    2. Tabelas plural.

10. Adicionando registro ao banco de dados via formulario usando metodo **POST** e o metodo **SAVE** para persistencia de dados.
    1. Criando a rota para **'events'**.
    2. Criando o metodo **store** com um parametro **'$Request'** do tipo **'Resquest'** em **EventController**,por convenção do **Laravel**, para enviar dados do formulario para o banco de dados.
    3. enviando o **'$event'** para **'save()'** para persistencia de dados.
    4. **redirecionando** usuario para o inicio.

        Nesta etapa tambem foi feita a **formatação** da pagina usando o **bootstrap** para melhor visualização dos dados, imprimando dentro do foreach no arquivo **'viewa/welcome'**.

11. Flash Messages, adicionando mensagens ao usuario por **session** usando metodo **'with'** para dar um feedback ao usuario.
    1. Adicionando o **'with'** ao redirecionamento dentro de **'EventController'**.
    2. Validando se o evento foi cadastrado com sucesso e informando na tela.

12. Salvando imagens pelo Laravel
    1. Fazer upload de imagem pelo Laravel.
    2. Mudando o **enctype** e criar o input.
    3. Fazer tratamento de verificacao da imagem.
    4. Salvar imagem com nome **unico**.
    5. No banco salvar o patch da imagem.
    6. Aprentando a imagem salva em seu respectivo card.

13. Resgatando um registro do banco de dados.
    1. Regastando apenas um registro pelo Eloquent.
    2. Utilizando o metodo findOrFail.
    3. Criando informações dos eventos.

14. Salvando arquivos JSON no banco de dados.
    1. Criando uma list de checkbox.
    2. tranformando a checkbox em um array em json para enviar para o banco de dados.
    3. Salvando os dados selecionado pelo usuario no banco de dados como array.

15. Salvando datas.
    1. Criando input do tipo **date**.
    2. Criar um campo **"dateTime"** via **migration**.
    3. Enviar dados via **Controller** pelo **POST**.

16. Busca no Laravel.
    1. Consulta o banco de dados.
    2. Criar uma pesquisa a partir do resultado da consulta.
    3. Filtra e apresentar para o usuario final.

17. Autenticação no **Laravel** (**login**/**Registro**)
    1. Usando **Jetstream** para autenticar usuario.
    2. Intalando componentes.
    3. Adaptando **Jetstream** ao projeto
    4. Entendendo as funcionalidade do **Jetstream**.

18. **Relation (one to many)**
    1. Criando relacões entre os bando de dados com chaves primarias.
    2. Criando uma chave estrangeira no banco de dados.
    3. Relacionando 1 usuario para varios eventos.

19. Exibindo dados do usuario na view
    1. Consultando o id do usuario que criou o evento e passando para a **view** **Show**
    2. Inserindo o nome do usuario consultado na **view** **Show**.

20. Criando uma **Dashboard**.
    1. Criando uma **dashboard** propria sem usar o padrão Jetstream.
    2. Criando a rota e a logica da **dashboard** para apresentar o usuario na sua propria **dashboard**.
    3. formatando a **dashboard**.

21. **Deletano** eventos.
    1. Criando uma **rota** nova.
    2. Usando outro verbo **HTTP** **'Delete'**.
    3. Fazendo a logica no **Controller** para persistir no banco.
        1. Recebendo o **id** do evento.
        2. Chamando o **metodo** **'delete()'**.
        3. redirecionando para a **dashboard**.
        4. criando os botões na **dashboard**.

22. **Editando** eventos.
    1. Criando a **logica** de edição do registro.
    2. Criando uma nova rota e uma **view** que mostra o **form** com os dados preenchidos.
    3. Usando outro verbo **HTTP** **'PUT'**.
    4. **Pesistir** a alteração por meio do action no **controller**.

23. Relação many to many
    1. Aprendendo relação de registro many to many
    2. Fazer a logica para um usuario ter varios eventos, e um evento ter varios usuarios.
    3. Criando nova tabela no banco de dados para criar a relação seguindo a convenção do laravel
    
24. Personalizando informações, views, e incrementando removendo usuario do evento