# Autenticação, login e cadastro com o CI4
Páginas de login e cadastro feitas com o [CodeIgniter 4](https://codeigniter.com/user_guide/intro/index.html). Validação dos dados dos formulários realizada no servidor, através das classes de validação. Autenticação necessária para acesso à página inicial do usuário - usa um filtro para qualquer outra rota que não `/login` e `/cadastro`.
## Requerimentos
- `MySQL` (verifique as configurações do banco em `/.env`).
## Uso
- `chmod +x init; ./init` para instalar o framework
- Execute o servidor de testes com `php spark serve`
