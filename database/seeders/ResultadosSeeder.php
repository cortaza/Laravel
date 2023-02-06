<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resultado;

class ResultadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///////////////////////////////
        //-----//ELABORAR//-----//
        ///////////////////////////////
        /////////////1 trimestre////////////////
        $resultado1 = new resultado();
        $resultado1->resultado='ELABORAR MAPAS DE PROCESOS QUE PERMITAN IDENTIFICAR LAS ÁREASINVOLUCRADAS EN UN SISTEMA DE INFORMACIÓN, UTILIZANDO HERRAMIENTASINFORMÁTICAS Y LAS TICS, PARA GENERAR INFORMES SEGÚN LAS NECESIDADES DELA EMPRESA';
        $resultado1->estado='1';
        $resultado1->competencias_codigo='220501006';
        $resultado1->save();
        ////////////////1 trimestre/////////////
        $resultado2 = new resultado();
        $resultado2->resultado='PLANTEAR DIFERENTES ALTERNATIVAS, DE MODELOS TECNOLÓGICOS DE INFORMACIÓNEMPRESARIAL, TENIENDO EN CUENTA LA PLATAFORMA TECNOLÓGICA DE LA EMPRESAY LAS TENDENCIAS DEL MERCADO, PARA DAR SOLUCIÓN A LAS SITUACIONESRELACIONADAS CON EL MANEJO DE LA INFORMACIÓN DE LA ORGANIZACIÓN.';
        $resultado2->estado='1';
        $resultado2->competencias_codigo='220501006';
        $resultado2->save();
        //////////////1 trimestre//////////////
        $resultado3 = new resultado();
        $resultado3->resultado='APLICAR LAS TÉCNICAS DE RECOLECCIÓN DE DATOS , DISEÑANDO LOSINSTRUMENTOS NECESARIOS PARA EL PROCESAMIENTO DE INFORMACIÓN, DEACUERDO CON LA SITUACIÓN PLANTEADA POR LA EMPRESA';
        $resultado3->estado='1';
        $resultado3->competencias_codigo='220501006';
        $resultado3->save();
        ///////////////////////////////
        //-----//CONSTRUIR//-----//
        ///////////////////////////////
        //////////////trimestre2/////////////////
        $resultado4 = new resultado();
        $resultado4->resultado='INTERPRETAR EL INFORME TECNICO DE DISEÑO,  PARA DETERMINAR EL PLAN DE TRABAJO DURANTE LA FASE DE CONSTRUCCION DEL SOFTWARE, DE ACUERDO CON LAS NORMAS Y PROTOCOLOS';
        $resultado4->estado='1';    
        $resultado4->competencias_codigo='220501007';
        $resultado4->save();
        //////////////trimestre2/////////////////
        $resultado5 = new resultado();
        $resultado5->resultado='CONSTRUIR LA BASE DE DATOS, A PARTIR DEL MODELO DE DATOS DETERMINADO EN EL DISEÑO DEL SISTEMA, UTILIZANDO SISTEMAS DE GESTIÓN DE BASE DE DATOS, SEGÚN LOS PROTOCOLOS ESTABLECIDOS EN LA ORGANIZACIÓN';
        $resultado5->estado='1';    
        $resultado5->competencias_codigo='220501007';
        $resultado5->save();
        //////////////trimestre2/////////////////
        $resultado6 = new resultado();
        $resultado6->resultado='CONSTRUIR LA INTERFAZ DE USUARIO, APOYADO EN LA EVALUACIÓN DEL PROTOTIPO, DETERMINANDO LAS ENTRADAS Y SALIDAS REQUERIDAS EN EL DISEÑO Y DEFINIENDO LOS LINEAMIENTOS PARA LA NAVEGACIÓN, DE ACUERDO CON LAS NECESIDADES DEL USUARIO
        ';
        $resultado6->estado='1';    
        $resultado6->competencias_codigo='220501007';
        $resultado6->save();
        /////////////////trimestre3////////////
        $resultado7 = new resultado();
        $resultado7->resultado='CONSTRUIR LA INTERFAZ DE USUARIO, APOYADO EN LA EVALUACIÓN DEL PROTOTIPO, DETERMINANDO LAS ENTRADAS Y SALIDAS REQUERIDAS EN EL DISEÑO Y DEFINIENDO LOS LINEAMIENTOS PARA LA NAVEGACIÓN, DE ACUERDO CON LAS NECESIDADES DEL USUARIO
        ';
        $resultado7->estado='1';    
        $resultado7->competencias_codigo='220501007';
        $resultado7->save();
        /////////////////trimestre3////////////
        $resultado8 = new resultado();
        $resultado8->resultado='REALIZAR LA CODIFICACIÓN DE LOS MÓDULOS DEL SISTEMA Y EL PROGRAMA PRINCIPAL, A PARTIR DE LA UTILIZACIÓN DEL LENGUAJE DE PROGRAMACIÓN SELECCIONADO, DE ACUERDO CON LAS ESPECIFICACIONES DEL DISEÑO
        ';
        $resultado8->estado='1';    
        $resultado8->competencias_codigo='220501007';
        $resultado8->save();
        /////////////////trimestre3////////////
        $resultado9 = new resultado();
        $resultado9->resultado='CONSTRUIR EL PROGRAMA DE INSTALACIÓN DEL APLICATIVO, UTILIZANDO LAS HERRAMIENTAS DE DESARROLLO DISPONIBLES EN EL MERCADO, SEGÚN LAS CARACTERÍSTICAS DE LA ARQUITECTURA DE LA SOLUCIÓN
        ';
        $resultado9->estado='1';    
        $resultado9->competencias_codigo='220501007';
        $resultado9->save();
        /////////////////trimestre4////////////
        $resultado10 = new resultado();
        $resultado10->resultado='EJECUTAR Y DOCUMENTAR LAS PRUEBAS DEL SOFTWARE, APLICANDO TÉCNICAS DE ENSAYO-ERROR, DE ACUERDO CON EL PLAN DISEÑADO Y LOS PROCEDIMIENTOS ESTABLECIDOS POR LA EMPRESA.
        ';
        $resultado10->estado='1';    
        $resultado10->competencias_codigo='220501007';
        $resultado10->save();
        //////////10//////trimestre4////////////
        $resultado11 = new resultado();
        $resultado11->resultado='ELABORAR EL MANUAL TÉCNICO DE LA APLICACIÓN, DE ACUERDO CON LA COMPLEJIDAD DEL APLICATIVO Y SEGÚN NORMAS Y PROCEDIMIENTOS ESTABLECIDOS POR LA EMPRESA
        ';
        $resultado11->estado='1';    
        $resultado11->competencias_codigo='220501007';
        $resultado11->save();
        ///////////////////////////////
        //-----//NEGOCIACIÒN//-----//
        ///////////////////////////////
        //////////////trimestre2/////////////////
        $resultado12 = new resultado();
        $resultado12->resultado='INTERPRETAR EL DIAGNÓSTICO DE NECESIDADES INFORMÁTICAS, PARA DETERMINAR LAS TECNOLÓGICAS REQUERIDAS EN EL MANEJO DE LA INFORMACIÓN, DE ACUERDO CON LAS NORMAS Y PROTOCOLOS  ESTABLECIDOS POR LA EMPRESA';
        $resultado12->estado='1';    
        $resultado12->competencias_codigo='220501009';
        $resultado12->save();
        //////////////trimestre4/////////////////
        $resultado13 = new resultado();
        $resultado13->resultado='PARTICIPAR EN LOS PERFECCIONAMIENTOS DE CONTRATOS INFORMÁTICOS, ESTABLECIENDO CLÁUSULAS TÉCNICAS, QUE RESPONDAN A LAS NECESIDADES DE LOS ACTORES DE LA NEGOCIACIÓN, DE ACUERDO CON LA LEY DE CONTRATACIÓN';
        $resultado13->estado='1';    
        $resultado13->competencias_codigo='220501009';
        $resultado13->save();
        //////////////trimestre4/////////////////
        $resultado14 = new resultado();
        $resultado14->resultado='DEFINIR ESTRATEGIAS PARA LA ELABORACIÓN DE TÉRMINOS DE REFERENCIA Y PROCESOS DE EVALUACIÓN DE PROVEEDORES, EN LA ADQUISICIÓN DE TECNOLOGÍA, SEGÚN PROTOCOLOS ESTABLECIDOS. ';
        $resultado14->estado='1';    
        $resultado14->competencias_codigo='220501009';
        $resultado14->save();
        //////////////trimestre4/////////////////
        $resultado15 = new resultado();
        $resultado15->resultado='ELABORAR EL INFORME SOBRE EL CUMPLIMIENTO DE LOS TÉRMINOS DE REFERENCIA PREVISTOS EN LA NEGOCIACIÓN, DE ACUERDO CON LA PARTICIPACIÓN DE CADA UNO DE LOS ACTORES EN RELACIÓN CON LA SATISFACCIÓN DE LOS BIENES INFORMÁTICOS CONTRATADOS Y RECIBIDOS, SEGÚN NORMAS Y PROTOCOLOS DE LA ORGANIZACIÓN';
        $resultado15->estado='1';    
        $resultado15->competencias_codigo='220501009';
        $resultado15->save();
        ///////////////////////////////
        //-----//ANALIZAR//-----//
        ///////////////////////////////
        //////////////trimestre 1/////////////////
        $resultado16 = new resultado();
        $resultado16->resultado='INTERPRETAR EL INFORME DE REQUERIMIENTOS, PARA DETERMINAR LAS NECESIDADES TECNOLÓGICAS EN EL MANEJO DE LA INFORMACIÓN, DE ACUERDO CON LAS NORMAS Y PROTOCOLOS ESTABLECIDOS EN LA EMPRESA';
        $resultado16->estado='1';    
        $resultado16->competencias_codigo='220501032';
        $resultado16->save();
        //////////////trimestre 1/////////////////
        $resultado17 = new resultado();
        $resultado17->resultado='ELABORAR EL INFORME DE LOS RESULTADOS DEL ANÁLISIS DEL SISTEMA DEINFORMACIÓN, DE ACUERDO CON LOS REQUERIMIENTOS DEL CLIENTE SEGÚNNORMAS Y PROTOCOLOS ESTABLECIDOS.';
        $resultado17->estado='1';    
        $resultado17->competencias_codigo='220501032';
        $resultado17->save();
        //////////////trimestre 1/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='REPRESENTA EL BOSQUEJO DE LA SOLUCIÓN AL PROBLEMA PRESENTADO POR EL CLIENTE, MEDIANTE LA ELABORACIÓN DE DIAGRAMAS DE CASOS DE USO, APOYADO EN EL ANÁLISIS DEL INFORME DE REQUERIMIENTOS, AL CONFRONTAR LA SITUACIÓN PROBLEMICA CON EL USUARIO SEGÚN NORMAS Y PROTOCOLOS DE LA ORGANIZACION
        ';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501032';
        $resultado18->save();
        //////////////trimestre 1/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='VALORAR LA INCIDENCIA DE LOS DATOS EN LOS PROCESOS DEL MACROSISTEMA, TOMANDO COMO REFERENTE EL DICCIONARIO DE DATOS Y LAS MINIESPECIFICACIONES, PARA LA CONSOLIDACIÓN DE LOS DATOS QUE INTERVIENEN, DE ACUERDO CON PARÁMETROS ESTABLECIDOS';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501032';
        $resultado18->save();
        //////////////trimestre 1/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='CONSTRUIR EL MODELO CONCEPTUAL DEL MACROSISTEMA FRENTE A LOS REQUERIMIENTOS DEL CLIENTE, MEDIANTE EL USO E INTERPRETACIÓN DE LA INFORMACIÓN LEVANTADA, REPRESENTADO EN DIAGRAMAS DE CLASE, DE INTERACCIÓN, COLABORACIÓN Y CONTRATOS DE OPERACIÓN, DE ACUERDO CON LAS DIFERENTES SECUENCIAS, FASES Y PROCEDIMIENTOS DEL SISTEMA.';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501032';
        $resultado18->save();
        ///////////////////////////////
        //-----//DISEÑAR//-----//
        ///////////////////////////////
        //////////////trimestre 1/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='DISEÑAR LA ARQUITECTURA DEL SOFTWARE, MEDIANTE LA INTERPRETACIÓN DE LAS CLASES, OBJETOS Y MECANISMOS DE COLABORACIÓN, UTILIZANDO HERRAMIENTAS TECNOLÓGICAS DE DISEÑO, DE ACUERDO CON LAS TENDENCIAS DE LAS TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501033';
        $resultado18->save();
        //////////////trimestre 1/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='DISEÑAR LA ESTRUCTURA DE DATOS, A PARTIR DEL MODELO CONCEPTUAL DETERMINADO EN EL ANÁLISIS DEL SISTEMA, UTILIZANDO HERRAMIENTAS TECNOLÓGICAS DE BASES DE DATOS, SEGÚN LAS NORMAS Y ESTÁNDARES ESTABLECIDOS';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501033';
        $resultado18->save();
        //////////////trimestre 2/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='APLICAR POLÍTICAS Y MECANISMOS DE CONTROL EN EL DISEÑO DEL SISTEMA DEINFORMACIÓN, MEDIANTE EL ANÁLISIS DE LA VULNERABILIDAD DE LA INFORMACIÓN,SIGUIENDO LOS PARÁMETROS ESTABLECIDOS POR LA ORGANIZACIÓN.';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501033';
        $resultado18->save();
        //////////////trimestre 2/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='DISEÑAR LA ARQUITECTURA TECNOLÓGICA DEL SISTEMA DE INFORMACIÓN, MEDIANTEEL RECONOCIMIENTO DE HARDWARE Y SOFTWARE, DE ACUERDO CON LA TECNOLOGÍADISPONIBLE EN EL MERCADO, EL INFORME DE ANÁLISIS LEVANTADO Y EL DIAGRAMADE DISTRIBUCIÓN';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501033';
        $resultado18->save();
        //////////////trimestre 2/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='CONSTRUIR EL PROTOTIPO DEL SISTEMA DE INFORMACIÓN, A PARTIR DEL ANÁLISIS DE LAS CARACTERÍSTICAS FUNCIONALES DEL SISTEMA EN RELACIÓN CON FACILIDAD DE MANEJO, FUNCIONALIDAD Y EXPERIENCIA DEL USUARIO, APOYADO EN SOFTWARE APLICADO SEGÚN PROTOCOLOS DE DISEÑO';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501033';
        $resultado18->save();
        //////////////trimestre 2/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='ELABORAR EL INFORME DE DISEÑO DEL SISTEMA DE INFORMACIÓN, DE ACUERDOCON LA SELECCIÓN DE LAS HERRAMIENTAS, TANTO DE SOFTWARE COMO DEHARDWARE, REQUERIDAS PARA LA SOLUCIÓN INFORMÁTICA.';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501033';
        $resultado18->save();
        ///////////////////////////////
        //-----//CALIDAD//-----//
        ///////////////////////////////
        //////////////trimestre 4/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='CONFIGURAR EL SOFTWARE DE LA APLICACIÓN PARA CLIENTE Y SERVIDOR, MEDIANTE LA UTILIZACIÓN DEL HARDWARE DISPONIBLE, EJECUTÁNDOLA EN LA PLATAFORMA TECNOLÓGICA, SEGÚN NORMAS Y PROTOCOLOS ESTABLECIDOS POR LA EMPRESA';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501034';
        $resultado18->save();        
        //////////////trimestre 4/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='ELABORAR EL INFORME ADMINISTRATIVO, SIGUIENDO LOS PROTOCOLOS DE LA ORGANIZACIÓN, BASADO EN LOS PLANES DE INSTALACIÓN, RESPALDO Y MIGRACIÓN DEL SISTEMA DE INFORMACIÓN, FACILITANDO LA OPERATIVIDAD Y MANTENIMIENTO DE LA SOLUCIÓN INFORMÁTICA';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501034';
        $resultado18->save();  
        //////////////trimestre 4/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='ELABORAR INFORMES TÉCNICOS RELACIONADOS CON LA SOLUCIÓN INFORMÁTICA IMPLANTADA, DE ACUERDO CON LAS PROPUESTAS DE ALTERNATIVAS APLICADAS, TENIENDO EN CUENTA LAS TÉCNICAS DE COMUNICACIÓN Y SEGÚN NORMAS Y PROTOCOLOS ESTABLECIDOS';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501034';
        $resultado18->save();     
        //////////////trimestre 4/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='DEFINIR ESTRATEGIAS PARA LA VALIDACIÓN DE MANUALES DE USUARIO Y DE OPERACIÓN, RESPONDIENDO A LAS NECESIDADES Y SATISFACCIÓN DEL CLIENTE, FRENTE A LA SOLUCIÓN INFORMÁTICA PROPUESTA, SEGÚN POLÍTICAS DE LA ORGANIZACIÓN';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501034';
        $resultado18->save();        
        //////////////trimestre 4/////////////////
        $resultado18 = new resultado();
        $resultado18->resultado='CAPACITAR A LOS USUARIOS DEL SISTEMA, SOBRE LA ESTRUCTURACIÓN Y EL MANEJO DEL APLICATIVO, DE ACUERDO CON EL PLAN ESTABLECIDO, EL PERFIL DE LOS USUARIOS, SEGÚN POLÍTICAS DE LA ORGANIZACIÓN';
        $resultado18->estado='1';    
        $resultado18->competencias_codigo='220501034';
        $resultado18->save();        

    }
}
