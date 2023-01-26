# Autenticação, login e cadastro com o CI4
Páginas de login e cadastro feitas com o [CodeIgniter 4](https://codeigniter.com/user_guide/intro/index.html). Validação dos dados dos formulários realizada no servidor, através das classes de validação. Autenticação necessária para acesso à página inicial do usuário - usa um filtro para qualquer outra rota que não `/login` e `/cadastro`. 404 para rotas não definidas.
## Requerimentos
- `MySQL` (verifique as configurações em `/env`).
## Uso
- Configure o `MySQL` em `/env` e renomeie o arquivo para '/.env'
- A porta usada pelo Spark pode ser configurada em '/config/ports' (o padrão é uma porta alta aleatória gerada por '/config/ports').
- `composer install && composer start` (`composer start` cria o banco e a tabela de usuários)
## Apache
[Servir com o Apache](https://codeigniter4.github.io/userguide/installation/running.html#hosting-with-apache).
##
![ezgif com-gif-maker (3)](https://user-images.githubusercontent.com/97701096/214858340-6d44b392-a1b8-46d7-830a-5adaf6bcdb18.gif)
