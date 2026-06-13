<?php

include("config.php");

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if(isset($_POST['import']))
{
    $fileName = $_FILES['excel_file']['tmp_name'];

    $spreadsheet = IOFactory::load($fileName);

    $sheet = $spreadsheet->getActiveSheet();

    $rows = $sheet->toArray();

    foreach($rows as $key => $row)
    {
        if($key == 0)
        {
            continue;
        }

        $name = $row[1];
        $email = $row[2];
        $course = $row[3];
        $marks = $row[4];

        mysqli_query($conn,"
            INSERT INTO students
            (name,email,course,marks)
            VALUES
            ('$name','$email','$course','$marks')
        ");
    }

    echo "Data Imported Successfully";
}
?>