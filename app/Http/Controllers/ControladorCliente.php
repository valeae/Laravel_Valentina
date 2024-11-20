<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    protected $clients;

    public function __construct()
    {
        $this->clients = [
            ['id' => 0, 'name' => 'Emmett', 'last_name' => 'Brown', 'email' => 'emmett@domain.com'],
            ['id' => 1, 'name' => 'Jennifer', 'last_name' => 'Parker', 'email' => 'jennifer@domain.com'],
        ];
    }

    public function control()
    {
        $clientes = Client::all();
        return view('index', ['clients' => $this->clients]); // Pasar el arreglo a la vista
    }

    public function details($id)
    {
        return view('details', ['id' => $id]); // Pasar el ID a la vista si es necesario
    }
}
