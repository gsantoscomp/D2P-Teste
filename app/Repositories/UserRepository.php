<?php


namespace App\Repositories;


use App\Models\User;

class UserRepository
{
    public function recuperaUsuarioLogado()
    {
        /**
         * Essa função deveria retornar o usuário logado no sistema
         * Para fim de exemplo, vamos fazer apenas um retorno de usuário fixo
         */

        $user = new User();
        $user->codigo = 3256;

        return $user;
    }
}
