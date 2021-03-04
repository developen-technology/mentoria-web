<?php

$alumnos = [
  [
    'nombre' => 'Juan Perez',
    'cod_carrera' => 1874,
  ],
  [
    'nombre' => 'Carolina Andrade',
    'cod_carrera' => 1975,
  ]  
];

function calcularCompromisos($alumno) 
{
  $carreras = [
    [
      'nombre' => 'Ing. Industrial',
      'codigo' => 1874,
      'arancel' => 10000000,
    ],
	[
      'nombre' => 'Psicologia',
      'codigo' => 1975,
      'arancel' => 8000000,
    ]    
  ];
  
  foreach ($carreras as $carrera) {
    if ($carrera['codigo'] === $alumno['cod_carrera']) {
      $compromisos = array_merge([75000], array_fill(0, 10, $carrera['arancel'] / 10));
      return $compromisos;
    }
  }
  
  return false; 
}

foreach ($alumnos as $alumno) {
  print_r(calcularCompromisos($alumno));
}
