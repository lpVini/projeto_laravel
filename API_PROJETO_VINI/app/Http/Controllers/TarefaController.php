<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detarefa;


class TarefaController extends Controller
{
   
    public function index()
    {
        return Detarefa::all(); 
    }

   
    public function store(Request $request)
    {
        Detarefa::create($request->all());
        return ('Tarefa criada com sucesso');
    }

 
    public function show(string $id)
    {
        return Detarefas::findOrFail($id);
    }


    public function update(Request $request, string $id)
    {
        $detarefa = detarefa::findOrFail($id);
        $detarefa->update($request->all());
        return ('tarefa atualizada com sucesso');
    }

    public function destroy(string $id)
    {
        $detarefa = detarefa::findOrFail($id);
        $detarefa->delete();
        return ('Tarefa excluida com sucesso');
    }
}
