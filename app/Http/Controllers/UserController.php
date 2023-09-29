<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function create()
    {
        // Exibir o formulário de criação
    }

    public function store(Request $request)
    {
        // Salvar um novo recurso no banco de dados
    }

    public function show($id)
    {
        // Exibir um recurso específico
    }

    public function edit($id)
    {
        // Exibir o formulário de edição
    }

    public function update(Request $request, $id)
    {
        // Atualizar um recurso no banco de dados
    }

    public function destroy($id)
    {
        // Excluir um recurso do banco de dados
    }
 
}
