<?php

use Illuminate\Database\Seeder;
use App\Personaje;

class DatabaseSeeder extends Seeder
{
	    private $arrayPersonaje = array(
        array(
            'nombre' => 'Platy',
            'imagen' => 'platy.jpg',
            'raza' => 'Humano',
            'clase' => 'Luchador',
            'genero' => 'Masculino'

        ),        
        array(
            'nombre' => 'Boquerón',
            'imagen' => 'boqueron.jpg',
            'raza' => 'Humano',
            'clase' => 'Defensor',
            'genero' => 'Masculino'
        )
    );
	private function seedPersonajes() {
		DB::table('personajes')->delete();
		foreach($this->arrayPersonaje as $personaje) {
			$p = new Personaje;
			$p->nombre = $personaje['nombre'];
			$p->imagen = $personaje['imagen'];
			$p->raza = $personaje['raza'];
			$p->clase = $personaje['clase'];
			$p->genero = $personaje['genero'];
			$p->save();
		}
	}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedPersonajes();
        $this->command->info('Tabla personajes inicializada con datos');
    }
}
