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
        $this->validate($request, $this->message->rules());
        $dataForm = $request->all();
        $data = $this->message->create($dataForm);
        return response()->json($data, 201);
    }
}
