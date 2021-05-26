<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></p>


## Sobre o projeto

API desenvolvida utilizando o LARAVEL 8. Foi aplicado uma arquitetura de desenvolvimento voltado ao domínio, (não exatamente o DDD), porém uma adaptação que visa seguir alguns dos princípios adotados por esse conceito.

Basicamente possui 2 endpoints:

```bash
# Retorna todos os contatos submetidos e persistidos no banco
GET /api/contact

# Valida, salva anexo, envia email e persiste os dados de contato enviados
POST /api/contact

```
## Como instalar

```bash
# Clonar o repositório
$ git clone https://github.com/andredev-ba/netshowme-challenge-api.git

# Executar o composer install na raíz do projeto
$ composer install

```
## Configurações iniciais

```bash
# Criar um arquivo com o nome .env na raíz do projeto com o seguinte conteúdo
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:TgIwxzqxaqC0V0vY8FMlV6wmmZzM3bRWzBwzbbNZoaE=
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_DATABASE=challenge_db
DB_USERNAME=postgres
DB_PASSWORD=postgres

AWS_ACCESS_KEY_ID=AKIA5AXJ3K7OJQLALL5L
AWS_SECRET_ACCESS_KEY=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
AWS_DEFAULT_REGION=us-west-2

#Troque as propriedades de DB do .env pelas crendencias do seu banco. Funciona com mysql também. Nesse caso, basta alterar a propriedade DB_CONNECTION para mysql.
# Abra o arquivo config/config.php para informar o email que receberá os contatos

# Executar o migrate para criar a estrutura do banco de dados
$ php artisan migrate

# Expor a API localmente em localhost:8000
$ php artisan serve

```
## Observações importantes
-> Um problema comum, é faltar a extensão do PHP para comunicação com o banco. Se ao executar o migrate, ocorrer um erro de comunicação, instale a extensão php do banco escolhido.

-> Outro detalhe é que por ter sido desenvolvido com o laravel 8, é preciso que a versão do PHP seja igual ou superior a 7.4

Para maiores detalhes de como o laravel 8 funciona, acesse sua documentação em https://laravel.com/docs
