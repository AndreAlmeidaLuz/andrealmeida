<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $dados = [
        'name'=>"André",
        'email'=>"admin@admin.com",
        'password'=>bcrypt("admin123"),
      ];
      if(User::where('email','=',$dados['email'])->count()) {
        $usuario = User::where('email','=',$dados['email'])->first();
        $usuario->update($dados);

        echo "Usuario Alterado";
      }
      else{
        User::create($dados);
        echo "usuario criado";

      }

    }
}
