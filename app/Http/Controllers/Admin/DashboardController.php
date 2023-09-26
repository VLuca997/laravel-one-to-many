<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();  //recuperiamo l'utente autenticato
        //dobbiamo aggiungere l'id dell'user autenticato 
        $userId = Auth::id();//se l'utente è autenticato, recuperiamo il suo id: con un dd testiamo la prova del primo utente autenticato
        
        
        return view('admin.dashboard');
    }
}
