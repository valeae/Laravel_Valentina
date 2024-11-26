<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ControladorCliente extends Controller
{
    public function lista()
    {
        $clientes = Cliente::all();


        if ($clientes->isEmpty()){
            $data = [
                'mensaje' => 'No se encontraron clientes',
                'estado' => 200
            ];
            return response() ->json($data,204);
        };
        return response() -> json($clientes,200);
    }

    public function cliente($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json([
                'mensaje' => 'Cliente no encontrado',
                'estado' => 404
            ]);
        }

        return response()->json($cliente, 200);
    }

    public function crear(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'email' => 'required|email|unique:clientes',
            'telefono' => 'required|digits:10'
        ]);

        if ($validador->fails()) {
            return response()->json([
                'mensaje' => 'Error en la validación de datos',
                'errores' => $validador->errors(),
                'estado' => 400
            ]);
        }

        $cliente = Cliente::create($request->only('nombre', 'email', 'telefono'));

        return response()->json([
            'Cliente' => $cliente,
            'estado' => 201
        ]);
    }

    public function actualizar(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json([
                'mensaje' => 'Cliente no encontrado',
                'estado' => 404
            ]);
        }

        $validador = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'telefono' => 'required|digits:10'
        ]);

        if ($validador->fails()) {
            return response()->json([
                'mensaje' => 'Error en la validación de datos',
                'errores' => $validador->errors(),
                'estado' => 400
            ]);
        }

        $cliente->update($request->only('nombre', 'email', 'telefono'));

        return response()->json([
            'Mensaje' => 'Cliente actualizado',
            'Cliente' => $cliente,
            'Estado' => 200
        ]);
    }

    public function eliminar($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json([
                'mensaje' => 'Cliente no encontrado',
                'estado' => 404
            ]);
        }

        $cliente->delete();

        return response()->json([
            'mensaje' => 'Cliente eliminado',
            'estado' => 200
        ]);
    }
}
