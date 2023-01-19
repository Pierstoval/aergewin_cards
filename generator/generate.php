#!/usr/bin/env php
<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\ErrorHandler\ErrorHandler;

require_once dirname(__DIR__).'/vendor/autoload.php';

ErrorHandler::register();

$input = new ArgvInput();
$output = new ConsoleOutput();
$io = new SymfonyStyle($input, $output);

$io->title('Aergewin cards generator');

$outputDir = str_replace(['\\', '/'], DIRECTORY_SEPARATOR, dirname(__DIR__).'/src/lib/data/');
$sourceFilename = __DIR__.'/data.ods';

if (!file_exists($sourceFilename)) {
    $io->error(sprintf('Please create a data file in the "%s" file.', $sourceFilename));
}

$doc = IOFactory::load($sourceFilename);
$doc->discardMacros();

//
//
//
//
//
//

$io->block('Fetching event cards...');
$io->progressStart();

$sheet = $doc->getSheetByName('Cards');

$cards = [];
$startRow = $currentRow = 12;

do {
    $io->progressAdvance();
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }

    $cards[] = [
        'Nom' => $sheet->getCell('A'.$currentRow)->getValue(),
        'Style' => $sheet->getCell('B'.$currentRow)->getValue(),
        'Type' => $sheet->getCell('C'.$currentRow)->getValue(),
        'Effet' => $sheet->getCell('D'.$currentRow)->getValue(),
        'Storyline' => $sheet->getCell('E'.$currentRow)->getValue(),
    ];

    $currentRow++;
} while ($firstCell);

$io->progressFinish();

$io->block('Saving them as a JSON file');

$json = json_encode($cards, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
$jsonFile = $outputDir.'cards.json';
file_put_contents($jsonFile, $json);

$io->success(sprintf('Done! Exported to file %s', $jsonFile));

//
//
//
//
//
//

$io->block('Fetching characters...');
$io->progressStart();

$sheet = $doc->getSheetByName('Characters');

$characters = [];
$startRow = $currentRow = 3;

do {
    $io->progressAdvance();
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }

    //
    //
    //
    //
    //
    //
    //
    //
    //
    $characters[] = [
        'Classe' => $sheet->getCell('A'.$currentRow)->getValue(),
        'Attaque' => $sheet->getCell('B'.$currentRow)->getValue(),
        'Défense' => $sheet->getCell('C'.$currentRow)->getValue(),
        'PV' => $sheet->getCell('D'.$currentRow)->getValue(),
        'Nombre d\'actions' => $sheet->getCell('E'.$currentRow)->getValue(),
        'Capacité spéciale' => $sheet->getCell('F'.$currentRow)->getValue(),
        'Arme' => $sheet->getCell('G'.$currentRow)->getValue(),
        'Dégâts' => $sheet->getCell('H'.$currentRow)->getCalculatedValue(),
        'Capacité arme' => $sheet->getCell('I'.$currentRow)->getCalculatedValue(),
    ];

    $currentRow++;
} while ($firstCell);

$io->progressFinish();

$io->block('Saving them as a JSON file');

$json = json_encode($characters, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
$jsonFile = $outputDir.'characters.json';
file_put_contents($jsonFile, $json);

$io->success(sprintf('Done! Exported to file %s', $jsonFile));
