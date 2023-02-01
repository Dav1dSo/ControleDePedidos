<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidosUesController extends Controller
{
    public function UesPedidos() {

        return view('UesPedidos');

    }
}
