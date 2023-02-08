<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ficha;

class FichasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /////////////////////////////////////////
        ///////////--------ADSI--------//////////
        /////////////////////////////////////////
        $ficha1=new ficha();
        $ficha1->nr_ficha='2515397';
        $ficha1->programas_codigo='228106';
        $ficha1->jornada='Diurna';
        $ficha1->modalidad='Presencial';
        $ficha1->nr_aprendices='25';
        $ficha1->save();
    }
}
