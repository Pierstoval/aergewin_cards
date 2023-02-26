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

$sheet = $doc->getSheetByName('Events');

$cards = [];
$startRow = $currentRow = 12;

do {
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }
    $io->progressAdvance();

    $cards[] = [
        'nom' => $sheet->getCell('A'.$currentRow)->getValue(),
        'style' => $sheet->getCell('B'.$currentRow)->getValue(),
        'type' => $sheet->getCell('C'.$currentRow)->getValue(),
        'effet' => $sheet->getCell('D'.$currentRow)->getValue(),
        'storyline' => $sheet->getCell('E'.$currentRow)->getValue(),
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
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }
    $io->progressAdvance();

    $characters[] = [
        'classe' => $sheet->getCell('A'.$currentRow)->getValue(),
        'attaque' => $sheet->getCell('B'.$currentRow)->getValue(),
        'defense' => $sheet->getCell('C'.$currentRow)->getValue(),
        'pv' => $sheet->getCell('D'.$currentRow)->getValue(),
        'nombre_actions' => $sheet->getCell('E'.$currentRow)->getValue(),
        'capacite_speciale' => $sheet->getCell('F'.$currentRow)->getValue(),
        'arme' => $sheet->getCell('G'.$currentRow)->getValue(),
        'degats' => $sheet->getCell('H'.$currentRow)->getCalculatedValue(),
        'capacite_arme' => $sheet->getCell('I'.$currentRow)->getCalculatedValue(),
    ];

    $currentRow++;
} while ($firstCell);

$io->progressFinish();

$io->block('Saving them as a JSON file');

$json = json_encode($characters, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
$jsonFile = $outputDir.'characters.json';
file_put_contents($jsonFile, $json);

$io->success(sprintf('Done! Exported to file %s', $jsonFile));

//
//
//
//
//
//

$io->block('Fetching discoveries cards...');
$io->progressStart();

$sheet = $doc->getSheetByName('Discoveries');

$discoveries = [];
$startRow = $currentRow = 6;

do {
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }
    $io->progressAdvance();

    $discoveries[] = [
        'nom' => $sheet->getCell('A'.$currentRow)->getValue(),
        'type' => $sheet->getCell('B'.$currentRow)->getValue(),
        'effet' => $sheet->getCell('C'.$currentRow)->getValue(),
        'storyline' => $sheet->getCell('D'.$currentRow)->getValue(),
    ];

    $currentRow++;
} while ($firstCell);

$io->progressFinish();

$io->block('Saving them as a JSON file');

$json = json_encode($discoveries, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
$jsonFile = $outputDir.'discoveries.json';
file_put_contents($jsonFile, $json);

$io->success(sprintf('Done! Exported to file %s', $jsonFile));


//
//
//
//
//
//

$io->block('Fetching monsters...');
$io->progressStart();

$sheet = $doc->getSheetByName('Monsters');

$monsters = [];
$startRow = $currentRow = 3;

do {
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }
    $io->progressAdvance();

    $monsters[] = [
        'type' => $sheet->getCell('A'.$currentRow)->getValue(),
        'attaque' => $sheet->getCell('B'.$currentRow)->getValue(),
        'defense' => $sheet->getCell('C'.$currentRow)->getValue(),
        'pv' => $sheet->getCell('D'.$currentRow)->getValue(),
        'degats' => $sheet->getCell('E'.$currentRow)->getValue(),
        'vitesse' => $sheet->getCell('F'.$currentRow)->getValue(),
        'special' => $sheet->getCell('G'.$currentRow)->getValue(),
        'amount' => $sheet->getCell('H'.$currentRow)->getValue(),
    ];

    $currentRow++;
} while ($firstCell);

$io->progressFinish();

$io->block('Saving them as a JSON file');

$json = json_encode($monsters, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
$jsonFile = $outputDir.'monsters.json';
file_put_contents($jsonFile, $json);

$io->success(sprintf('Done! Exported to file %s', $jsonFile));


//
//
//
//
//
//

$io->block('Fetching weapons...');
$io->progressStart();

$sheet = $doc->getSheetByName('Weapons');

$weapons = [];
$startRow = $currentRow = 2;

do {
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }
    $io->progressAdvance();

    $weapons[] = [
        'nom' => $sheet->getCell('A'.$currentRow)->getValue(),
        'cout' => $sheet->getCell('B'.$currentRow)->getValue(),
        'degats' => $sheet->getCell('C'.$currentRow)->getValue(),
        'carac' => $sheet->getCell('D'.$currentRow)->getValue(),
    ];

    $currentRow++;
} while ($firstCell);

$io->progressFinish();

$io->block('Saving them as a JSON file');

$json = json_encode($weapons, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
$jsonFile = $outputDir.'weapons.json';
file_put_contents($jsonFile, $json);

$io->success(sprintf('Done! Exported to file %s', $jsonFile));


//
//
//
//
//
//

$io->block('Fetching victory conditions...');
$io->progressStart();

$sheet = $doc->getSheetByName('Victory');

$victories = [];
$startRow = $currentRow = 3;

do {
    $firstCell = trim($sheet->getCell('A'.$currentRow)->getValue() ?: '');

    if (!$firstCell) {
        continue;
    }
    $io->progressAdvance();

    $victories[] = [
        'condition_victoire' => $sheet->getCell('A'.$currentRow)->getValue(),
    ];

    $currentRow++;
} while ($firstCell);

$io->progressFinish();

$io->block('Saving them as a JSON file');

$json = json_encode($victories, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
$jsonFile = $outputDir.'victories.json';
file_put_contents($jsonFile, $json);

$io->success(sprintf('Done! Exported to file %s', $jsonFile));
