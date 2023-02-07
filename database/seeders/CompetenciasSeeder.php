<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competencia;

class CompetenciasSeeder extends Seeder
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
        $competencia1 = new competencia();
        $competencia1->codigo='220501006';
        $competencia1->nombre='ESPESIFICAR';
        $competencia1->descripcion='ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR EL SISTEMA DE
        INFORMACION DE ACUERDO CON LAS NECESIDADES DEL CLIENTE';
        $competencia1->save();

        $competencia2 = new competencia();
        $competencia2->codigo='220501007';
        $competencia2->nombre='CONSTRUIR';
        $competencia2->descripcion='CONSTRUIR EL SISTEMA QUE CUMPLA CON LOS REQUISITOS DE LA SOLUCIÓN
        INFORMÁTICA.';
        $competencia2->save();

        $competencia3 = new competencia();
        $competencia3->codigo='220501009';
        $competencia3->nombre='PARTICIAR';
        $competencia3->descripcion='PARTICIPAR EN EL PROCESO DE NEGOCIACIÓN DE TECNOLOGÍA INFORMÁTICA PARA
        PERMITIR LA IMPLEMENTACIÓN DEL SISTEMA DE INFORMACIÓN.';
        $competencia3->save();

        $competencia4 = new competencia();
        $competencia4->codigo='220501032';
        $competencia4->nombre='ANALIZAR';
        $competencia4->descripcion='ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACION';
        $competencia4->save();

        $competencia5 = new competencia();
        $competencia5->codigo='220501033';
        $competencia5->nombre='DISEÑAR';
        $competencia5->descripcion='DISEÑAR EL SISTEMA DE ACUERDO CON LOS REQUISITOS DEL CLIENTE';
        $competencia5->save();

        $competencia6 = new competencia();
        $competencia6->codigo='220501034';
        $competencia6->nombre='IMPLANTAR';
        $competencia6->descripcion='IMPLANTAR LA SOLUCION QUE CUMPLA CON LOS REQUISISTOS PARA SU OPERACIÓN. ';
        $competencia6->save();

        $competencia7 = new competencia();
        $competencia7->codigo='220501035';
        $competencia7->nombre='APLICAR';
        $competencia7->descripcion='APLICAR BUENAS PRÁCTICAS DE CALIDAD EN EL PROCESO DE DESARROLLO DE SOFTWARE,
        DE ACUERDO CON EL REFERENTE ADOPTADO EN LA EMPRESA';
        $competencia7->save();

        $competencia8 = new competencia();
        $competencia8->codigo='240201500';
        $competencia8->nombre='PROMOVER';
        $competencia8->descripcion='PROMOVER LA INTERACCIÓN IDÓNEA CONSIGO MISMO, CON LOS DEMÁS Y CON LA
        NATURALEZA EN LOS CONTEXTOS LABORAL Y SOCIAL';
        $competencia8->save();

        $competencia9 = new competencia();
        $competencia9->codigo='240201501';
        $competencia9->nombre='COMPRENDER';
        $competencia9->descripcion='COMPRENDER TEXTOS EN INGLÉS EN FORMA ESCRITA Y AUDITIVA';
        $competencia9->save();

        $competencia10 = new competencia();
        $competencia10->codigo='240201502';
        $competencia10->nombre='PRODUCIR';
        $competencia10->descripcion='PRODUCIR TEXTOS EN INGLÉS EN FORMA ESCRITA Y ORAL.';
        $competencia10->save();
    }
}
