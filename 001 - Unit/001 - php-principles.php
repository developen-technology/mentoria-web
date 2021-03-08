 
// 1) echo "Hola Mundo";

// 2) Variables

$greeting = "Hola Mundo";
echo $greeting;

$name = 'Carlos';
echo 'Hey, $name';

// Interpolation
echo "Hey, $name";

// Concat
echo 'Hey, ' . $name;

$age = 41;
echo "You are $age";

// 3) Arrays

$names = ['Juan', 'Pedro', 'Miguel'];

foreach ($names as $name) {
    echo $name;
}

!!! Hacer que listen los nombres hacia abajo

/* Modificar $names = ['Juan', 'Pedro', 'Miguel', 40]; */

* Explicar zero-index
echo $names[1];

* Agregar elementos
$names[] = 'Andrea';

* mostrar uso de funciones
print_r($names);

* mostrar uso de count
echo count($names);
echo "La cantidad de elementos es " . count($names);

* mostrar while y for
$limit = count($names);
for ($i = 0; $i < $limit; $i++) {
  echo $names[$i] . "\n";
}

$i = 0;
while ($i < $limit) {
  echo $names[$i] . "\n";
  $i++;
}

* Mostrar www.php.net

* mostrar uso de sort
sort($names);

* mostrar uso de key en foreach
foreach ($names as $key => $name) {
    echo "$key ====> $name\n";
}

// 4) Arrays asociativos

$postulante = [
    'nombre' => 'Juan Perez',
    'edad' => 17,
    'nem' => 700
];

* Mostrar strtoupper
* Mostrar ucfirst($postulante['nombre']);
* Mostrar ucwords($postulante['nombre']);

$postulantes = [
    [
        'nombre' => 'Juan Perez',
        'edad' => 17,
        'nem' => 700
    ],
    [
        'nombre' => 'David Martinez',
        'edad' => 16,
        'nem' => 800
    ],
    [
        'nombre' => 'Carolina Perez',
        'edad' => 17,
        'nem' => 750
    ]    
];

// Explicar lo del warning
foreach ($postulantes as $key => $postulante) {
    echo "$key ====> $postulante\n";
}

** mostrar uso de print_r, explicar interpolation
foreach ($postulantes as $key => $postulante) {
    print_r($postulante);
}

foreach ($postulantes as $key => $postulante) {
    echo "$postulante['nombre'] . "\n";
}

foreach ($postulantes as $key => $postulante) {
    echo "{$postulante['nombre']}\n";
}

!!! Muestrenb los datos listados hacia abajo

// 4) Operador ternario

$requerimientos = [
    [
        'asignado' => 'Juan Perez',
        'completo' => 1,
        'titulo' => "Terminar sistema de matriculas"
    ],
    [
        'asignado' => 'David Martinez',
        'completo' => 0,
        'titulo' => "Crear logo sistema matrícula"
    ],
];

foreach ($requerimientos as $key => $requerimiento) {
    echo $requerimiento['titulo'] . "\n";
  	echo $requerimiento['asignado'] . "\n";
  	echo ($requerimiento['completo'] == 1 ? 'Terminado' : 'Pendiente') . "\n\n";
}
