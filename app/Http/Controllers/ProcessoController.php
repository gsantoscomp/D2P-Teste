<?php

namespace App\Http\Controllers;

use App\Repositories\ProcessoRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    private $processoRepository;
    private $userRepository;

    public function __construct(ProcessoRepository $processoRepository,
                                UserRepository $userRepository)
    {
        $this->processoRepository = $processoRepository;
        $this->userRepository = $userRepository;
    }

    public function retornaProcessosAtivosPorUsuario($cliente)
    {
        try {
            // Simula uma verificação de usuário logado
            $clienteLogado = $this->userRepository->recuperaUsuarioLogado();

            /**
             * Se o cliente tenta acessar os processos de outro,
             * ele é redirecionado para a página com seus processos
             */
            if ($clienteLogado->codigo != $cliente) {
                return redirect()
                    ->route('cliente.processos', ['cliente' => $clienteLogado->codigo])
                    ->with('message', 'Ops! Você não tem permissão de acessar este recurso.');
            }

            $processos = $this->processoRepository
                ->retornaProcessosAtivosPorUsuario($cliente);

            return view('processos', [
                'processos' => $processos
            ]);

        } catch (\Exception $exception) {
            if (env('APP_DEBUG')) {
                throw $exception;
            }

            abort(500);
        }
    }
}
