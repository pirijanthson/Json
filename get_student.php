<?php
// Define the student records array
$students = [
    [
        "sid" => "110",
        "name" => "Thusa",
        "age" => 24,
        "address" => "Udupiddy,Sithapa lane",
        "cgpa" => 3.8
    ],
    [
        "sid" => "111",
        "name" => "Thamil",
        "age" => 22,
        "address" => "5th floar,Nothern uni",
        "cgpa" => 3.0
    ],
    [
        "sid" => "112",
        "name" => "Abi",
        "age" => 22,
        "address" => "Maruthanarmadam,Nisha lane",
        "cgpa" => 2.5
    ],
    [
        "sid" => "113",
        "name" => "Shamee",
        "age" => 23,
        "address" => "Areyakulam junction,TikTok lane",
        "cgpa" => 3.7
    ],
    [
        "sid" => "114",
        "name" => "Sajee",
        "age" => 22,
        "address" => "Uduvil,Thalivar lane",
        "cgpa" => 3.5
    ]
];

$sid = $_GET['sid'];

$studentRecord = null;
foreach ($students as $student) {
    if ($student['sid'] == $sid) {
        $studentRecord = $student;
        break;
    }
}

if ($studentRecord) {
    echo json_encode($studentRecord);
} else {
    echo json_encode(["error" => "Student not found"]);
}
?>