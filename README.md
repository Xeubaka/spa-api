Instruções:

- Frontend:

  - instalar [node.js](https://nodejs.org/en/).
  - baixar/clonar [repositório](https://github.com/Xeubaka/spa-app).
  - executar o comando “npm install" em seguida "npm start" no local onde foi salvo o repositório.

- Backend:

  - instalar [wamp](http://wampserver.aviatechno.net/) (ou similar).
  - instalar [Composer](https://getcomposer.org/), selecione um php 7.3 ou maior.
  - executar wamp e abri o phpMyAdmin, criar um banco de dados com o nome “spa”.
  - baixar/clonar [repositório](https://github.com/Xeubaka/spa-api) para a pasta “C:\wamp64\www”, abrir [localhost](http://localhost/spa-api/public/) (deve aparecer a versão do lumen/laravel).
  - Assim que clonar, abra o repositório e renomeie o arquivo '.env.exemple' para '.env'
  - executar o comando “php artisan migrate” (cria as tabelas e colunas necessárias para aplicação)
  - (para definir php como uma variável do sistema, pesquisar variáveis de ambiente e salvar o caminho no Path  ‘C:\wamp64\bin\php\php*’) * = versão do php instalada.
