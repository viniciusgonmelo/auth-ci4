# Autenticação, login e cadastro com o CI4
Páginas de login e cadastro feitas com o [CodeIgniter 4](https://codeigniter.com/user_guide/intro/index.html). Validação dos dados dos formulários realizada no servidor, através das classes de validação. Autenticação necessária para acesso à página inicial do usuário - usa um filtro para qualquer outra rota que não `/login` e `/cadastro`.
## Requerimentos
- `MySQL` (verifique as configurações em `/env`).
## Uso
- Configure o `MySQL` em `/env` e renomeie o arquivo para '/.env'
- `composer install && composer start` (`composer start` cria o banco e a tabela de usuários)
##
![Peek 2023-01-19 08-39](https://user-images.githubusercontent.com/97701096/213434350-77b83e95-17c5-4059-a5bf-9c1c5268036d.gif)
