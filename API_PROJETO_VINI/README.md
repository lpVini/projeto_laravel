Sistema de Gerenciamento de Tarefas
No .env alterei o laravel para o nome da pasta que eu criei no banco de dados no caso foi db_api_projet_vini

1. Tarefacontroller 
index(): Retorna todas as instâncias da classe Detarefa, ou seja, retorna todas as tarefas registradas no sistema.

store(Request $request): Cria uma nova instância da classe Detarefa com base nos dados fornecidos na requisição HTTP. Os dados são obtidos do objeto $request e são usados para criar uma nova tarefa no banco de dados.

show(string $id): Retorna uma instância específica da classe Detarefa com base no ID fornecido como parâmetro. Caso não encontre a tarefa correspondente, lança uma exceção.

update(Request $request, string $id): Atualiza uma instância específica da classe Detarefa com base no ID fornecido como parâmetro. Os dados para atualização são obtidos do objeto $request e são aplicados na tarefa correspondente ao ID fornecido.

destroy(string $id): Exclui uma instância específica da classe Detarefa com base no ID fornecido como parâmetro. A tarefa correspondente ao ID fornecido é localizada e removida do banco de dados.



2. Model detarefa
namespace App\Models: Define o namespace em que a classe Detarefa está localizada. Isso ajuda a organizar as classes em grupos lógicos e evita conflitos de nome.

use Illuminate\Database\Eloquent\Factories\HasFactory: Importa a classe HasFactory do Laravel, que fornece métodos auxiliares para a criação de fábricas de modelos.

use Illuminate\Database\Eloquent\Model: Importa a classe Model do Laravel, que é a classe base para todos os modelos do Eloquent ORM.

class Detarefa extends Model: Define a classe Detarefa, que estende a classe Model. Isso significa que a classe Detarefa herda todos os recursos e funcionalidades fornecidos pela classe Model.

use HasFactory: Utiliza a trait HasFactory na classe Detarefa. A trait HasFactory fornece um método para criar fábricas de instâncias do modelo.

protected $fillable: Define os campos do modelo que podem ser preenchidos em massa (mass assignment). Neste caso, os campos 'titulo', 'descricao' e 'status' são considerados preenchíveis em massa, o que significa que eles podem ser definidos em um array e passados para os métodos create() ou update() para criar ou atualizar registros no banco de dados.

3. Migrations
use Illuminate\Support\Facades\Schema: Importa a classe Schema do Laravel, que fornece métodos para manipular a estrutura do banco de dados.

return new class extends Migration: Retorna uma nova instância anônima de uma classe que estende a classe Migration. Essa técnica permite definir a migração diretamente no arquivo sem a necessidade de criar uma classe separada.

public function up(): void: O método up() é executado quando a migração é aplicada. Nele, é definido o código que cria a tabela 'detarefas' no banco de dados.

Schema::create('detarefas', function (Blueprint $table) {...}): Utiliza o método create() da classe Schema para criar a tabela 'detarefas' no banco de dados. O argumento do método é o nome da tabela e uma função de callback que recebe um objeto Blueprint.

$table->id(): Cria uma coluna 'id' na tabela 'detarefas' que será a chave primária autoincrementável.

$table->string('titulo'): Cria uma coluna 'titulo' na tabela 'detarefas' do tipo string.

$table->string('descricao'): Cria uma coluna 'descricao' na tabela 'detarefas' do tipo string.

$table->string('status'): Cria uma coluna 'status' na tabela 'detarefas' do tipo string.

$table->timestamps(): Cria duas colunas 'created_at' e 'updated_at' na tabela 'detarefas' para registrar automaticamente a data e hora de criação e atualização dos registros.

public function down(): void: O método down() é executado quando a migração é revertida. Nele, é definido o código que remove a tabela 'detarefas' do banco de dados usando o método dropIfExists() da classe Schema.

4. Rotas
Route::get('/detarefas', [TarefaController::class, 'index']): Define uma rota GET para "/detarefas" que será tratada pelo método "index" do controlador TarefaController. Essa rota é usada para listar todas as tarefas.

Route::post('/detarefas', [TarefaController::class, 'store']): Define uma rota POST para "/detarefas" que será tratada pelo método "store" do controlador TarefaController. Essa rota é usada para criar uma nova tarefa.

Route::get('detarefas/{id}', [TarefaController::class, 'show']): Define uma rota GET para "detarefas/{id}" que será tratada pelo método "show" do controlador TarefaController. Essa rota é usada para obter os detalhes de uma tarefa específica, onde {id} é o parâmetro que representa o ID da tarefa.

Route::put('detarefas/{id}', [TarefaController::class, 'update']): Define uma rota PUT para "detarefas/{id}" que será tratada pelo método "update" do controlador TarefaController. Essa rota é usada para atualizar os detalhes de uma tarefa específica, onde {id} é o parâmetro que representa o ID da tarefa.

Route::delete('detarefas/{id}', [TarefaController::class, 'destroy']): Define uma rota DELETE para "detarefas/{id}" que será tratada pelo método "destroy" do controlador TarefaController. Essa rota é usada para excluir uma tarefa específica, onde {id} é o parâmetro que representa o ID da tarefa.

Essas rotas definem os pontos de extremidade (endpoints) da API para manipular as operações CRUD (Create, Read, Update, Delete) relacionadas às tarefas. Cada rota é associada a um método correspondente no controlador TarefaController, que será responsável por processar a lógica e fornecer uma resposta adequada para cada tipo de requisição.
