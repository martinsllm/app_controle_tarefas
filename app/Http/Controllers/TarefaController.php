<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarefaRequest;
use App\Interfaces\RepositoryInterface;
use App\Mail\NovaTarefaMail;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Mail;

class TarefaController extends Controller
{
    protected $tarefaRepository;
    public function __construct(RepositoryInterface $repository)
    {
        $this->middleware("auth");
        $this->tarefaRepository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $tarefas = $this->tarefaRepository->getAllWhere($user_id);
        return view('tarefa.index', ['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarefaRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        $tarefa = $this->tarefaRepository->create($data);
        $destino = auth()->user()->email;
        Mail::to($destino)->send(new NovaTarefaMail($tarefa));

        return redirect()->route('tarefa.show', ['tarefa' => $tarefa->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        return view('tarefa.show', ['tarefa' => $tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        $user_id = auth()->user()->id;

        if ($tarefa->user_id == $user_id)
            return view('tarefa.edit', ['tarefa' => $tarefa]);
        else
            return view('acesso-negado');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TarefaRequest $request, Tarefa $tarefa)
    {
        $user_id = auth()->user()->id;

        if (!$tarefa->user_id == $user_id)
            return view('acesso-negado');

        $tarefa->update($request->all());
        return redirect()->route('tarefa.show', ['tarefa' => $tarefa]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
