# APIAgenda

Xampp 7.2.9-0, 

PHP Version 7.2.9, 

Mysql

Crie o arquivo .htaccess na pasta v1 com as informacoes abaixo para o cURL.

RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f

RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]



Copie a pasta inteira para a pasta htdos do seu XAMPP ou similar.

Agenda + Api rest com PHP com testes Read, Modificacoes conexao.php colocar as credencias de conexão com o banco de dados. abrir o arquivo cliente.php esta dentro das pastas agenda_api/MATRIZ e alterar as informacoes relaciodas a sua URL: Exeplo: (http://localhost:8080/agendaTelefonica/agenda_api/api/v1/).  Depois abrir o index.php e clicar no nome API REST sera direcionado ao consumo da API no modo JSON.

