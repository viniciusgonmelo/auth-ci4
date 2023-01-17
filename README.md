# Autenticação, login e cadastro com o CI4
Páginas de login e cadastro feitas com o [CodeIgniter 4](https://codeigniter.com/user_guide/intro/index.html). Validação dos dados dos formulários realizada no servidor, através das classes de validação. Autenticação necessária para acesso à página inicial do usuário - usa um filtro para qualquer outra rota que não `/login` e `/cadastro`.
## Requerimentos
- `MySQL` (verifique as configurações em `/env`).
## Uso
- Configure o `MySQL` em `/env` e renomeie o arquivo para '/.env'
- `composer install && composer start` (`composer start` cria o banco e a tabela de usuários)
##
![Peek 2023-01-17 04-09](https://user-images.githubusercontent.com/97701096/212832844-0b39857f-2c71-4d1a-b760-2f0c4dabc8fe.gif)
