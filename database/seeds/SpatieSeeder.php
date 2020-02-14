<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use App\User;

class SpatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ---------------------------------------------------------------------------------

        $datos = array(
            array('tipo' => 'tarjeta de credito o debito', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('tipo' => 'paypal', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('tipo' => 'efecty', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('tipo' => 'pago contra-entrega', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
        );

        DB::table('metodos_de_pago')->insert($datos);

    	// ---------------------------------------------------------------------------------

    	// ---------------------------------------------------------------------------------

        $datos = array(
            array('estado' => 'Pendiente', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Aceptado', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Proceso de preparacion', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Enviado', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Entregado', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Cancelado', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Reembolsado', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Pago mediante transferencia bancaria pendiente', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),
            array('estado' => 'Pago mediante paypal pendiente', 
                  'created_at'=> Carbon::now(), 
                  'updated_at'=> Carbon::now()),

        );

        DB::table('estado_pedido')->insert($datos);

    	// ---------------------------------------------------------------------------------


      // ---------------------------------------------------------------------------------

        Role::create(['name' => 'usuario']);
        Role::create(['name' => 'cliente']);
        Role::create(['name' => 'administrador']);

      // ---------------------------------------------------------------------------------


      // ---------------------------------------------------------------------------------

        User::create([
          'nombre' => 'admin',
          'apellidos' => 'administrador',
          'email' => 'administrador@sistema.com',
          'telefono' => '3215014816',
          'password' => bcrypt('1234+Qwer'),
        ]);

        $usuario = User::find(1); // ADSI - Desarrollo
        $usuario->assignRole('administrador');

      // ---------------------------------------------------------------------------------


    }
}
