# BD_SH_2019

CRUD Sistema Hospitalar

Softwares utilizados:

- Sistema Operacional Linux de 64 bits

Apache (servidor web);
MariaDB ou MySQL (software de banco de dados);
PHP (linguagens de programação) ou Python.

Como configurar os softwares em sistemas baseados no Ubuntu x64

Rode os comandos:

1. Instalação do PHP

sudo apt update

sudo apt upgrade -y

sudo apt install -y apache2

sudo apt install -y php php-cli php-common php-gd php-mbstring php-intl php-xml php-zip php-pear libapache2-mod-php

2. Instalação e Configuração do MySQL

sudo apt install -y mysql-server mysql-client php-mysql

sudo mysql (teste)

Criando um novo usuário para banco de dados MySQL:
CREATE USER 'seu_usuario'@'localhost' IDENTIFIED BY 'sua_senha';
GRANT ALL PRIVILEGES ON *.* TO 'seu_usuario'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

sudo mysql -u seu_usuario -p (teste)

3. Instalação e configuração do phpMyAdmin

sudo apt install -y phpmyadmin

4. Instalação do MySQL WorkBench

sudo apt remove --purge mysql-workbench*

sudo apt install libgtkmm-3.0-1v5

sudo apt install mysql-workbench*
