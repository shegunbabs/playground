<?php

function readNibssInstitutionCodeCsv(): Generator
{
    $file = storage_path("app/public/nibss_institution_code.csv");
    $fileDump = fopen($file, "r");
    while(($data = fgetcsv($fileDump, 1000, ",")) !== false){
        yield $data;
    }
    fclose($fileDump);
}

function banksGenerator(): \Generator
{
    $banks = json_decode(
        file_get_contents(storage_path("app/public/bank_list.json"))
    );
    for ($i = 0; $i <= count($banks) - 1; $i++) {
        yield $banks[$i];
    }
}
