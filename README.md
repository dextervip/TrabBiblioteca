TrabBiblioteca
==============

# Utilização

Para utilizar a biblioteca, basta incluir-la em seu script php como abaixo:

    include('../build/package.phar');

# Construção

Para construir a biblioteca e gerar o arquivo .phar, navege até a raiz do projeto e rode:

    phing

A biblioteca será construida e estará disponível no diretório /build/package.phar

Requerimentos minimos:
=====================
Servidor Web
- PHP 5.4 ou versão superior (apt-get install apache2 php5)
   - short_tags deve estar ativado em seu php.ini
   - PEAR instalado (apt-get install php-pear)
   - Em windows, a pasta do php deve estar na variável de ambiente "Path"
   - A pasta do PEAR deve estar no include_path do php.ini
   - Phing (passos abaixo)

Para construção da biblioteca:
 
- Alterar configuração do php.ini, deve-se alterar phar.readonly

        phar.readonly = 0

- Instalar o construtor de software Phing:
        
        pear upgrade PEAR
        pear channel-discover pear.phing.info
        pear update-channels
        pear install --alldeps phing/phing

Atenção: Rodar como administrador

Duvidas: http://www.phing.info/trac/wiki/Users/Installation 

Uso 
===

Para a utilização da aplicaçao de demonstração, faça um clone para a pasta raiz do seu servidor e chame a URL em seu navegador:

    http://localhost/pastaDoClone/public/


License
========================================
Biblioteca para manipulação de cartas
Copyright (C) 2012  Rafael Tavares Amorim e Marcelo Maia Lopes

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.