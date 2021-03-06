<?php

use Illuminate\Database\Seeder;

class SalonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salones')->insert([
	      'nombre' => 'Salón A',
	      'numero' => 1,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('salones')->insert([
	      'nombre' => 'Salón B',
	      'numero' => 1,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('salones')->insert([
	      'nombre' => 'Salón C',
	      'numero' => 1,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
    }
}
