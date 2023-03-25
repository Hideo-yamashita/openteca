<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function homeView()
    {
        return view('welcome');
    }
    
    public function loginView()
    {
        return view('login');
    }
    public function cadastroView()
    {
        return view('cadastro');
    }
    public function meuslivrosView()
    {
        return view('meuslivros');
    }
    public function informacoeslivroView()
    {
        return view('informacoeslivro');
    }
    public function minhacontaView()
    {
        return view('minhaconta');
    }
    public function resultadopesquisalivroView()
    {
        return view('resultadopesquisalivro');
    }

}
