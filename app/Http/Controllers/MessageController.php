<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function __construct(Message $message, Request $request)
    {
        $this->message = $message;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->message->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->message->rules()); //pq $this no validate? cm funciona validate c/ rules()?
        $dataForm = $request->all();
        $data = $this->message->create($dataForm);
        return response()->json($data, 201);
    }
    
    public function show($id)
    {
        if(!$data = $this->message->find($id))
        {
            return response()->json(['error' => 'Não encontrado'], 404);
        }else 
        {
            return response()->json($data);
        }
        
    }
    public function update(Request $request, $id)
    {
        if(!$data = $this->message->find($id)){
            return response()->json(['error' , 'não encontrado'], 404);
        }else{
            $this->validate($request, $this->message->rules());
            $dataForm = $request->all();
            $data->update($dataForm);
            return response()->json($data, 201);
        }
       
    }

    public function destroy($id)
    {
        if(!$data = $this->message->find($id))
        {
            return response()->json(['error' => 'Não encontrado'],404);
        }else 
        {
            $data->delete();
            return response()->json(['success'=> 'deletado com sucesso!']);
        }
    }
}
