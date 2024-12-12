<?php
$multidimensi = [
    [
        "no" => 1,
        "nim" => "D212111028",
        "nama" => "Fanisa Tri Agna Fata",
    ],
    [
        "no" => 2,
        "nim" => "D212111014",
        "nama" => "Rizaldy Muhamad Sopyan",
    ],
    [
        "no" => 3,
        "nim" => "D212111006",
        "nama" => "Gita Septiani",
    ],
    [
        "no" => 4,
        "nim" => "D212111026",
        "nama" => "Aura Maliya",
    ],
    [
        "no" => 5,
        "nim" => "D212111023",
        "nama" => "Ajeng Aprilyani",
    ],
    [
        "no" => 6,
        "nim" => "D212111021",
        "nama" => "Triana Siti Aryani",
    ],
    [
        "no" => 7,
        "nim" => "D212111025",
        "nama" => "Aspiya Huwaida",
    ],
    [
        "no" => 8,
        "nim" => "D212111041",
        "nama" => "Sulthan Saalim Rabbani Atmadja",
    ],
    [
        "no" => 9,
        "nim" => "D212111004",
        "nama" => "Desi Syifa Fitria",
    ],
    [
        "no" => 10,
        "nim" => "D212111009",
        "nama" => "Islah Nurhasanah",
    ],
];

echo "<table border='1' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
      </tr>";
      
foreach ($multidimensi as $value) {
    echo "<tr>
            <td>{$value['no']}</td>
            <td>{$value['nim']}</td>
            <td>{$value['nama']}</td>
          </tr>";
}
echo "</table>";
?>