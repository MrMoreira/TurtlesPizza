Poderia rodar isso para instalar os componetes caso nao tenha

#--> composer global require laravel/installer 
#--> composer install
#--> cp .env.example .env
#--> php artisan key:generate
=====================

Abra o arquivo php.ini do PHP CLI. No seu caso, ele está localizado em:

C:\xampp\php\php.ini

Procure pela linha:

;extension=zip

Remova o ponto e vírgula (;) no início da linha para habilitar a extensão:

extension=zip

Salve o arquivo e reinicie o servidor Apache, se estiver usando o XAMPP:

    No painel do XAMPP, clique em Stop no Apache, depois em Start novamente.

Verifique se a extensão foi ativada executando:

php -m | findstr zip

O comando deve listar a extensão zip.
===============


Para rodar o projeto

#--> php artisan serve