<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'produto_id' => 2,
            'usuario' => 'João Lucas',
            'comentario' => 'Melhor Batata Frita!',
            'create_at' => date("Y/m/d h:i:s"),
            'update_at' => date("Y/m/d h:i:s"),
        ]);

        DB::table('comentarios')->insert([
            'produto_id' => 2,
            'usuario' => 'Mariana Silva',
            'comentario' => 'Muito bom!',
            'create_at' => date("Y/m/d h:i:s"),
            'update_at' => date("Y/m/d h:i:s"),
        ]);        

        DB::table('comentarios')->insert([
            'produto_id' => 2,
            'usuario' => 'Julia Martins',
            'comentario' => 'Espetacular!',
            'create_at' => date("Y/m/d h:i:s"),
            'update_at' => date("Y/m/d h:i:s"),
        ]);
    }
}
