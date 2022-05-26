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

            if ($clienteLogado->codigo != $cliente) {
                return;
            }

            $processos = $this->processoRepository
                ->retornaProcessosAtivosPorUsuario($cliente);

            return view('processos', ['processos' => $processos]);
        } catch (\Exception $exception) {
            if (env('APP_DEBUG')) {
                throw $exception;
            }
        }
    }
}
