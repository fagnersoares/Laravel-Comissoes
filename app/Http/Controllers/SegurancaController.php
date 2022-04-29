<?php

namespace App\Http\Controllers;

use App\Http\Requests\SegurancaRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SegurancaController extends Controller
{
    public function entrar(Request $request)
    {
        $mensagem = $request->session()->get('mensagem');
        return view('seguranca.login',compact('mensagem'));
    }

    public function login(SegurancaRequest $request)
    {

        if(!Auth::attempt($request->only(['email','password']))){
            return redirect()
                    ->back()
                    ->withErrors('Usuário e/ou senha incorretos');
        }

        return redirect()->route('home');
    }

    public function registrar()
    {
        return view('seguranca.registrar');
    }

    public function salvarUsuario(Request $request)
    {
        $data = $request->except('_tokens');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        Auth::login($user);

        $request->session()->flash(
            'mensagem',
            'Usuário criado com sucesso!! ;)',
            'success'
        );

        return redirect('/entrar');
    }

}
