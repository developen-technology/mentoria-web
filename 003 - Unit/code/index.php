<?php

// https://phpspreadsheet.readthedocs.io/en/latest/
// https://phpspreadsheet.readthedocs.io/en/latest/topics/accessing-cells/#setting-a-cell-value-by-column-and-row

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');

/*

$filmography = [
    [
        'actor' => 'Keanu Reeves',
        'movies' => [
            'Speed',
            'The Devil's Advocate',
            'Matrix',
            'John Wick',
        ]
    ],
    [
        'actor' => 'Scarlett Johansson',
        'movies' => [
            'Lost in Translation',
            'Match Point',
            'Avengers: Infinity War',
        ]
    ],    
];



*/