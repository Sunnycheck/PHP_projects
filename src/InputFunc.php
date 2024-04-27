<?php
//Task11
declare(strict_types=1);
$path = "log.txt";

$keyword = 'n';
$line = '';


$input = [];
while (true) {

    echo "Input your data. To cancel input type 'n'." . PHP_EOL;

    $line = trim(fgets(STDIN));
    if ($line === $keyword) {
        break;
    }
    $input[] = $line;


}
function addData(array $line, string $path): void
{
    $opened = fopen($path, "a+");

    foreach ($line as $value) {
        fwrite($opened, $value . PHP_EOL);
    }

    fclose($opened);

}

addData($input, $path);
function readData(string $file): string|false
{
    if (!file_exists($file)){
        return false;
    }
    $opened = fopen($file, 'r');
    $read = file($file);
    $result = end($read);
    fclose($opened);
    return $result;

}



$lastArg = readData($path);
echo "Last input: $lastArg";
