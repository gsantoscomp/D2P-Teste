<?php


namespace App\Repositories;


use App\Models\Processo;

class ProcessoRepository
{

    public function retornaProcessosAtivosPorUsuario(int $idUsuario)
    {
        return Processo::where([['Ativo', true], ['ClienteCodigo', $idUsuario]])
                            ->orderBy('DataDI', 'desc')
                            ->get();
    }

}
