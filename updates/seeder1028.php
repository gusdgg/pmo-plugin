<?php

namespace Gibraltarsf\Pmo\Updates;

use Winter\Storm\Database\Updates\Seeder;
use Gibraltarsf\Pmo\Models\Person;
use Carbon\Carbon;

class Seeder1028 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();

        $persons = array(
            ['id' => 1, 'last_name' => 'ALAMPRESE', 'first_name' => 'ALDANA', 'pilar_id' => 3, 'inmediato_id' => 61,'supervisor_id' => 59, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],   
            ['id' => 2, 'last_name' => 'ALBERTI', 'first_name' => 'MAURO MATIAS', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 3, 'last_name' => 'ALBORCH', 'first_name' => 'CARLOS', 'pilar_id' => 4, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 4, 'last_name' => 'ARAUJO CALIXTO', 'first_name' => 'CHARLOT', 'pilar_id' => null, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 5, 'last_name' => 'ASENIE', 'first_name' => 'MARCELO FABIAN', 'pilar_id' => 1, 'inmediato_id' => 42, 'supervisor_id' => 15, 'gerente_id' => 42, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 6, 'last_name' => 'AVILA', 'first_name' => 'MARTIN', 'pilar_id' => 5, 'inmediato_id' => 29, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 7, 'last_name' => 'BALDERRAMA', 'first_name' => 'DIEGO NICOLAS', 'pilar_id' => 1, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 8, 'last_name' => 'BARGAGNA', 'first_name' => 'JOSE MARIA', 'pilar_id' => 12, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 9, 'last_name' => 'BISCIONE', 'first_name' => 'CESAR HERNÁN', 'pilar_id' => 9, 'inmediato_id' => 45, 'supervisor_id' => 15, 'gerente_id' => 45, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 10, 'last_name' => 'BODIRIKYAN', 'first_name' => 'CRISTIAN', 'pilar_id' => 5, 'inmediato_id' => 29, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 11, 'last_name' => 'BURNENGO', 'first_name' => 'EDISON SANTIAGO', 'pilar_id' => 10, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 12, 'last_name' => 'CAPORALETTI', 'first_name' => 'YANINA PAOLA', 'pilar_id' => 3, 'inmediato_id' => 61, 'supervisor_id' => 59, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 13, 'last_name' => 'CARRIZO', 'first_name' => 'HERNAN', 'pilar_id' => 8, 'inmediato_id' => 21, 'supervisor_id' => 3, 'gerente_id' => 21, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 14, 'last_name' => 'CORDOBA', 'first_name' => 'HUMBERTO FABIAN', 'pilar_id' => 7, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 15, 'last_name' => 'COVELLO FERREYRA', 'first_name' => 'NICOLAS', 'pilar_id' => 5, 'inmediato_id' => 29, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 16, 'last_name' => 'DANDRE', 'first_name' => 'GASTON', 'pilar_id' => 1, 'inmediato_id' => 38, 'supervisor_id' => 15, 'gerente_id' => 38, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 17, 'last_name' => 'DIAZ', 'first_name' => 'CARLOS ALEJANDRO', 'pilar_id' => 1, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 18, 'last_name' => 'DURSI', 'first_name' => 'MARICEL', 'pilar_id' => 12, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 19, 'last_name' => 'FERNANDEZ LARRANDABURU', 'first_name' => 'MAURICIO', 'pilar_id' => 8, 'inmediato_id' => 21, 'supervisor_id' => 3, 'gerente_id' => 21, 'created_at' => $time, 'updated_at' => $time],    
            ['id' => 20, 'last_name' => 'FERNANDEZ', 'first_name' => 'DANIEL OSCAR', 'pilar_id' => 5, 'inmediato_id' => 52, 'supervisor_id' => 67, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 21, 'last_name' => 'FERNANDEZ', 'first_name' => 'LUIS ALBERTO', 'pilar_id' => 8, 'inmediato_id' => 3, 'supervisor_id' => 21, 'gerente_id' => 21, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 22, 'last_name' => 'FILICI', 'first_name' => 'IGNACIO ANGEL', 'pilar_id' => 13, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 23, 'last_name' => 'FURLAN', 'first_name' => 'LARA CECILIA', 'pilar_id' => 3, 'inmediato_id' => 61, 'supervisor_id' => 59, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 24, 'last_name' => 'GARCÍA ANDERSON', 'first_name' => 'FERNANDO', 'pilar_id' => 2, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 25, 'last_name' => 'GARCIA', 'first_name' => 'LUCAS RAMIRO', 'pilar_id' => 1, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 26, 'last_name' => 'GIANNICI', 'first_name' => 'MARCELO LEONARDO', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 27, 'last_name' => 'GILABERT', 'first_name' => 'ROQUE ANTONIO', 'pilar_id' => 1, 'inmediato_id' => 14, 'supervisor_id' => 15, 'gerente_id' => 14, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 28, 'last_name' => 'IGLESIAS', 'first_name' => 'FLAVIA ROXANA', 'pilar_id' => 9, 'inmediato_id' => 45, 'supervisor_id' => 15, 'gerente_id' => 45, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 29, 'last_name' => 'LAFFUSA', 'first_name' => 'NICOLAS MATIAS', 'pilar_id' => 5, 'inmediato_id' => 52, 'supervisor_id' => 67, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 30, 'last_name' => 'LAFRANCONI', 'first_name' => 'ALEJANDRO JAVIER', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 31, 'last_name' => 'LETTIERI', 'first_name' => 'ADRIANA', 'pilar_id' => 3, 'inmediato_id' => 61, 'supervisor_id' => 59, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 32, 'last_name' => 'MEGIAS', 'first_name' => 'DIEGO MARTIN', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 33, 'last_name' => 'MORBELLI', 'first_name' => 'SERGIO', 'pilar_id' => 8, 'inmediato_id' => 21, 'supervisor_id' => 3, 'gerente_id' => 21, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 34, 'last_name' => 'MOSLARES', 'first_name' => 'JULIETA AYELEN', 'pilar_id' => 3, 'inmediato_id' => 61, 'supervisor_id' => 59, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 36, 'last_name' => 'NEGRI', 'first_name' => 'LUCIANO GERMAN', 'pilar_id' => 5, 'inmediato_id' => 29, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 37, 'last_name' => 'OCHOA CASTILLO', 'first_name' => 'ARYARY ROCIO', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 38, 'last_name' => 'PAEZ', 'first_name' => 'LUCIANA MALEN', 'pilar_id' => 1, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 39, 'last_name' => 'PAINCEIRA', 'first_name' => 'SOL', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 40, 'last_name' => 'PARISSI', 'first_name' => 'GUILLERMINA', 'pilar_id' => 14, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 41, 'last_name' => 'PELLEGRINI', 'first_name' => 'FRANCO MAURO', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 42, 'last_name' => 'PEREZ CHEVALLIER', 'first_name' => 'MARCELO ALEJANDRO', 'pilar_id' => 1, 'inmediato_id' => 15, 'supervisor_id' => 15, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 43, 'last_name' => 'POFFO', 'first_name' => 'MARIANO', 'pilar_id' => 9, 'inmediato_id' => 45, 'supervisor_id' => 15, 'gerente_id' => 45, 'created_at' => $time, 'updated_at' => $time],  
            ['id' => 44, 'last_name' => 'PRIMAVERILE CATANEO', 'first_name' => 'ANGEL ARIEL', 'pilar_id' => 14, 'inmediato_id' => 59, 'supervisor_id' => 15, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],    
            ['id' => 45, 'last_name' => 'QUIRCE', 'first_name' => 'NICOLAS MATIAS', 'pilar_id' => 9, 'inmediato_id' => 15, 'supervisor_id' => 15, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 46, 'last_name' => 'RODAS', 'first_name' => 'RODOLFO ARIEL', 'pilar_id' => 10, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 47, 'last_name' => 'ROKUSZ', 'first_name' => 'FEDERICO', 'pilar_id' => 4, 'inmediato_id' => 3, 'supervisor_id' => 21, 'gerente_id' => 21, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 48, 'last_name' => 'SACCHI', 'first_name' => 'MARÍA JULIA', 'pilar_id' => 13, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 49, 'last_name' => 'SALAZAR SERGE', 'first_name' => 'NORKIS LILIANA', 'pilar_id' => 5, 'inmediato_id' => 52, 'supervisor_id' => 67, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 50, 'last_name' => 'SALVATIERRA FRECHOU', 'first_name' => 'NICOLAS JOSE', 'pilar_id' => 3, 'inmediato_id' => 61, 'supervisor_id' => 59, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 51, 'last_name' => 'SANTILLAN', 'first_name' => 'GUILLERMO', 'pilar_id' => 5, 'inmediato_id' => 29, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 52, 'last_name' => 'SARMORIA', 'first_name' => 'MAURICIO SAUL', 'pilar_id' => 5, 'inmediato_id' => 67, 'supervisor_id' => 67, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 53, 'last_name' => 'SCHETTINO', 'first_name' => 'MATIAS AGUSTÍN', 'pilar_id' => 14, 'inmediato_id' => 59, 'supervisor_id' => 15, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 54, 'last_name' => 'SUAREZ', 'first_name' => 'CLEMENTE OSCAR', 'pilar_id' => 5, 'inmediato_id' => 49, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 55, 'last_name' => 'SUAREZ', 'first_name' => 'SILVIA', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 56, 'last_name' => 'URZAGASTI', 'first_name' => 'JORGE SAUL', 'pilar_id' => 10, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 57, 'last_name' => 'VEAUTE', 'first_name' => 'ALDANA', 'pilar_id' => 10, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 58, 'last_name' => 'VEIGA', 'first_name' => 'AGUSTIN', 'pilar_id' => 10, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 59, 'last_name' => 'VERGARA SCHULTZ', 'first_name' => 'GUILLERMO', 'pilar_id' => 14, 'inmediato_id' => 59, 'supervisor_id' => 15, 'gerente_id' => 59, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 60, 'last_name' => 'VIDAL', 'first_name' => 'JUAN PABLO', 'pilar_id' => 1, 'inmediato_id' => 15, 'supervisor_id' => 15, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 61, 'last_name' => 'VILLANUEVA', 'first_name' => 'TOBIAS MARCOS', 'pilar_id' => 12, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 62, 'last_name' => 'YASHAN', 'first_name' => 'VALERIA', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 63, 'last_name' => 'YÑIGUEZ', 'first_name' => 'SOLANGE MERCEDES', 'pilar_id' => 12, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => null, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 64, 'last_name' => 'FACUNDO', 'first_name' => 'RODRIGUEZ PARODI', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 65, 'last_name' => 'TOROSSIAN', 'first_name' => 'SILVANA', 'pilar_id' => 5, 'inmediato_id' => 20, 'supervisor_id' => 52, 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 66, 'last_name' => 'FUNAKOSHI', 'first_name' => 'LEANDRO TUTSUYA', 'pilar_id' => 1, 'inmediato_id' => 38, 'supervisor_id' => 15, 'gerente_id' => 38, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 67, 'last_name' => 'JUAREZ', 'first_name' => 'MARIA FLORENCIA', 'pilar_id' => 5, 'inmediato_id' => null, 'supervisor_id' => null , 'gerente_id' => 67, 'created_at' => $time, 'updated_at' => $time],
            ['id' => 68, 'last_name' => 'ASENIE', 'first_name' => 'MARCELO FABIAN', 'pilar_id' => 1, 'inmediato_id' => null, 'supervisor_id' => null, 'gerente_id' => 15, 'created_at' => $time, 'updated_at' => $time],

            );
        Person::insert($persons);

    }
}

/*
1	ALAMPRESE, ALDANA,	3,	61,	59,	59
2	ALBERTI, MAURO MATIAS,	5,	20,	52,	67
3	ALBORCH, CARLOS,	4,	,	,	59
4	ARAUJO CALIXTO, CHARLOT,	,   ,	,		
5	ASENIE, MARCELO FABIAN,	1,	42,	15,	42
6	AVILA, MARTIN,	5,	29,	52,	67
7	BALDERRAMA, DIEGO NICOLAS,	11,	,	,		
8	BARGAGNA, JOSE MARIA,	12,	,	,   		
9	BISCIONE, CESAR HERNÁN,	9,	45,	15,	45
10	BODIRIKYAN, CRISTIAN,	5,	29,	52,	67
11	BURNENGO, EDISON SANTIAGO,	10,	,	,		
12	CAPORALETTI, YANINA PAOLA,	3,	61,	59,	59
13	CARRIZO, HERNAN	8	21	3	21
14	CORDOBA, HUMBERTO FABIAN	7		15	42
15	COVELLO FERREYRA, NICOLAS	5			67
16	DANDRE, GASTON	1	38		
17	DIAZ, CARLOS ALEJANDRO	1		15	
18	DURSI, MARICEL	12			
19	FERNANDEZ LARRANDABURU, MAURICIO	8	21	3	21
20	FERNANDEZ, DANIEL OSCAR	5	52	67	67
21	FERNANDEZ, LUIS ALBERTO	8	3		21
22	FILICI, IGNACIO ANGEL	13			
23	FURLAN, LARA CECILIA	3	61	59	59
24	GARCÍA ANDERSON, FERNANDO	2		15	
25	GARCIA, LUCAS RAMIRO	1		15	
26	GIANNICI, MARCELO LEONARDO	5	20	52	67
27	GILABERT, ROQUE ANTONIO	1	14		
28	IGLESIAS, FLAVIA ROXANA	9	45	15	45
29	LAFFUSA, NICOLAS MATIAS	5	52	67	67
30	LAFRANCONI, ALEJANDRO JAVIER	5	20	52	
31	LETTIERI, ADRIANA	3	61	59	59
32	MEGIAS, DIEGO MARTIN	5	20	52	67
33	MORBELLI, SERGIO	8	21	3	21
34	MOSLARES, JULIETA AYELEN	3	61	59	59
36	NEGRI, LUCIANO GERMAN	5	29	52	67
37	OCHOA CASTILLO, ARYARY ROCIO	5	20	52	67
38	PAEZ, LUCIANA MALEN	1		15	
39	PAINCEIRA, SOL	5	20	52	67
40	PARISSI, GUILLERMINA				
41	PELLEGRINI, FRANCO MAURO	5	20	52	67
42	PEREZ CHEVALLIER, MARCELO ALEJANDRO	1	15		
43	POFFO, MARIANO	9	45	15	45
44	PRIMAVERILE CATANEO, ANGEL ARIEL	14	59	15	59
45	QUIRCE, NICOLAS MATIAS	9	15		45
46	RODAS, RODOLFO ARIEL	10			
47	ROKUSZ, FEDERICO	4		3	59
48	SACCHI, MARÍA JULIA				
49	SALAZAR SERGE, NORKIS LILIANA	5	52	67	67
50	SALVATIERRA FRECHOU, NICOLAS JOSE	3	61	59	59
51	SANTILLAN, GUILLERMO	5	29	52	67
52	SARMORIA, MAURICIO SAUL	5	67		67
53	SCHETTINO, MATIAS AGUSTÍN	14	59	15	59
54	SUAREZ, CLEMENTE OSCAR	5	49	52	67
55	SUAREZ, SILVIA	3	61	59	59
56	URZAGASTI, JORGE SAUL	1	5	42	42
57	VEAUTE, ALDANA	3	61	59	59
58	VEIGA, AGUSTIN	14	59	15	59
59	VERGARA SCHULTZ, GUILLERMO	14	15		59
60	VIDAL, JUAN PABLO	9	45	15	45
61	VILLANUEVA, TOBIAS MARCOS	3	59	15	59
62	YASHAN, VALERIA	5	20	52	67
63	YÑIGUEZ, SOLANGE MERCEDES	12			
64	FACUNDO, RODRIGUEZ PARODI	5	20	52	67
65	TOROSSIAN, SILVANA	5	20	52	67
66	FUNAKOSHI,LEANDRO TUTSUYA	1	38		
67	JUAREZ, MARIA FLORENCIA	5			67
68	ASENIE, MARCELO FABIAN	1		15	

*/