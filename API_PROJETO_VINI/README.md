Sistema de Gerenciamento de Tarefas
Este é um sistema de gerenciamento de tarefas desenvolvido utilizando o framework Laravel. O objetivo do sistema é fornecer uma API para realizar operações básicas de criação, leitura, atualização e exclusão (CRUD) de tarefas.

A API do sistema de gerenciamento de tarefas oferece as seguintes rotas:

GET /tarefa: Retorna todas as tarefas existentes.
GET /tarefa/{id}: Retorna os detalhes de uma tarefa específica.
POST /tarefa: Cria uma nova tarefa. Os seguintes parâmetros devem ser enviados no corpo da requisição: title, description, due_date.
PUT /tarefa/{id}: Atualiza os detalhes de uma tarefa específica. Os seguintes parâmetros podem ser enviados no corpo da requisição: title, description, due_date.
DELETE /tarefa/{id}: Exclui uma tarefa específica.
Certifique-se de incluir o cabeçalho Accept: application/json em todas as requisições para receber as respostas no formato JSON.

Estrutura do Projeto
O projeto Laravel segue a estrutura de diretórios padrão. As principais pastas e arquivos relevantes são:

app/: Contém as classes e lógica do aplicativo.
database/migrations/: Armazena os arquivos de migração do banco de dados.
routes/api.php: Define as rotas da API.
config/: Contém as configurações do projeto, como conexões de banco de dados e arquivos de ambiente.
tests/: Inclui os testes automatizados para o sistema.
Controllers/TarefaController: responsáveis ​​por receber as requisições HTTP, extrair os dados necessários, interagir com os modelos (ou outras classes relevantes) para executar a lógica de negócios e retornar as respostas apropriadas.
Models/Detarefa:  realiza operações de criação, leitura, atualização e exclusão (CRUD) nos dados do aplicativo.

Video https://youtu.be/wmZcFGUjjp4