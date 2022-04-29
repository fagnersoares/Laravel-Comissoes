<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\ClientesModel;
use Facade\FlareClient\Http\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        $clientes = ClientesModel::query()
            ->get();
        $mensagem = $request->session()->get('mensagem');
        return view('clientes.index', compact('clientes','mensagem'));
    }

    public function salvar(Request $request)
    {

        $cliente = ClientesModel::create($request->all());
        $request->session()->flash(
            'mensagem',
            'Cliente criado com sucesso'
        );
        return redirect()->route('lista_clientes');
    }
}
