<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::all();
        return
            ($client->count() === 0)
            ? response()->json('Sem Clientes cadastrados')
            : response()->json($client);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // return response()->json($request->input());

        $client = new Client();

        $client->name = $request->name;
        $client->email = $request->email;
        $client->birth = date('Y-m-d', strtotime($request->birth));
        $client->phone = $request->phone;

        return ($client->save())
            ? response()->json('Cliente cadastrado')
            : response()->json('Falha ao executar esta ação');
    }


    public function show($id)
    {
        $client = Client::find($id);
        return
            ($client)
            ? response()->json($client)
            : response()->json('Cliente requistado não foi encontrado');
    }


    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $client->name = $request->name;
        $client->email = $request->email;
        $client->birth = $request->birth;
        $client->phone = $request->phone;

        return ($client->save())
            ? response()->json('Cliente editado com sucesso')
            : response()->json('Falha ao executar esta ação');
    }


    public function destroy($id)
    {
        $client = Client::find($id);

        return ($client->save())
            ? response()->json('Cliente deletado')
            : response()->json('Falha ao executar esta ação');
    }
}
