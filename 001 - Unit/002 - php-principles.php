 
// 1) Conditionals

$requerimientos = [
    [
        'asignado' => 'Juan Perez',
        'completo' => 1,
        'titulo' => "Terminar sistema de matriculas"
    ],
    [
        'asignado' => 'David Martinez',
        'completo' => -1,
        'titulo' => "Crear logo sistema matrícula"
    ],
];

foreach ($requerimientos as $key => $requerimiento) {
    echo $requerimiento['titulo'] . "\n";
  	echo $requerimiento['asignado'] . "\n";
  
  	if ($requerimiento['completo'] == 1) {
      echo "Terminado\n\n";
    } else if ($requerimiento['completo'] == 0) {
      echo "Pendiente\n\n";
    } else {
      echo "Desconocido\n\n";
    }
}

* explicar operadores logicos ===

// 2) Funciones

$alumnos = [
    [
        'nombre' => 'Juan Perez',
        'cod_carrera' => 1874
    ],
    [
        'nombre' => 'Carolina Andrade',
        'cod_carrera' => 1975
    ],    
];

function calcularCompromisos($alumno) 
{
    $carreras = [
        [
            'nombre' => 'Ing. Industrial',
            'codigo' => 1874,
            'arancel' => 10000000
        ],
        [
            'nombre' => 'Psicología',
            'codigo' => 1975,
            'arancel' => 8000000    
        ]
    ];
  
    foreach ($carreras as $carrera) {
        if ($carrera['codigo'] == $alumno['cod_carrera']) {
            $compromisos = array_merge([75000], array_fill(0, 10, $carrera['arancel'] / 10));
            return $compromisos;
        }
    }
    
    return -1;
}

foreach ($alumnos as $alumno) {
    print_r(calcularCompromisos($alumno));
}

!!! Ejercicio deben agregar la segunda matricula

