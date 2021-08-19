<p align="center"><img src="http://site.federalst.com.br/fsmail.jpg"></p>


# Teste prático - Federal Soluções Técnicas


## Instalação 
* Execute composer install
* Renomeie o arquivo .env.example para .env
* Configure o acesso do seu banco de dados postgree no arquivo .env e email para utilização da notificação
* Execute php artisan key:generate
* Execute php artisan migrate
* Execute php artisan db:seed

## Demandas atendidas
* Acesso ao ambiente Administrativo
* Editar e excluir usuários
* Request validate (Regex placa do veículo e os caracteres do ano)
* Cadastrar, editar e excluir veículos
* Excluir veículos utilizando Soft Deleting
* Utilização do Notifications para envio de e-mail

## Demandas não atendidas
* Cadastro de novos usuários
* Utilização do Event do Laravel
* Ambiente de acesso do usuário

## Algumas telas
* Tela de Login

![Principal](images/img1.png)

![Tela de Login](images/img2.png)

* Página Administrativa

![Pagina Administrativa](images/img3.png)

* Listagem dos usuários cadastrados

![Listagem](images/img4.png)

* Tela de edição do usuário

![edição](images/img5.png)

* Cadastro de um novo veículo

![add veículo](images/img6.png)

* Tela de usuário listando os veículos vinculado.

![add veículo](images/img7.png)