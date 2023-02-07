<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramasSeeder extends Seeder
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
        $programa1=new programa();
        $programa1->codigo='228106';
        $programa1->nombre='ADSI (Analisis y Desarrrollo de Sistemas de Informacion)';
        $programa1->estado='En formacion';
        $programa1->duracion='24 meses';
        $programa1->semaforos_id='33';
        $programa1->save();
    }
}
