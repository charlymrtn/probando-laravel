<?php

use Illuminate\Database\Seeder;

class RellenaNotas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 40; $i++) {
          // code...
          DB::table('notas')->insert([
            'titulo' => 'Mi nota '.$i,
            'descripcion' => 'la descripcion de la nota '.$i,
          ]);
        }

        $this->command->info('tabla de notas rellenada correctamente');
    }
}
