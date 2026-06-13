<?php

include("config.php");

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Email');
$sheet->setCellValue('D1', 'Course');
$sheet->setCellValue('E1', 'Marks');

$result = mysqli_query($conn,"SELECT * FROM students");

$row = 2;

while($data = mysqli_fetch_assoc($result))
{
    $sheet->setCellValue('A'.$row,$data['id']);
    $sheet->setCellValue('B'.$row,$data['name']);
    $sheet->setCellValue('C'.$row,$data['email']);
    $sheet->setCellValue('D'.$row,$data['course']);
    $sheet->setCellValue('E'.$row,$data['marks']);

    $row++;
}

$writer = new Xlsx($spreadsheet);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

header('Content-Disposition: attachment;filename="students.xlsx"');

$writer->save('php://output');

exit;
?>