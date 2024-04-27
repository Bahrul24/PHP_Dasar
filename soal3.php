<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Display Data Siswa</h1>
        <?php
        // Data from the image
        $data = [
            ['No Urut' => 1, 'Poin' => 75, 'Siswa' => 'Adi', 'NIS' => '2345'],
            ['No Urut' => 2, 'Poin' => 80, 'Siswa' => 'Joni', 'NIS' => '65'],
            ['No Urut' => 3, 'Poin' => 70, 'Siswa' => 'Jihan', 'NIS' => ''],
            ['No Urut' => 4, 'Poin' => 85, 'Siswa' => 'Aya', 'NIS' => ''],
            ['No Urut' => 5, 'Poin' => 90, 'Siswa' => 'Ita', 'NIS' => '6'],
            ['No Urut' => 6, 'Poin' => 95, 'Siswa' => 'Budi', 'NIS' => '7'],
            ['No Urut' => 7, 'Poin' => 65, 'Siswa' => 'Tini', 'NIS' => '8'],
            ['No Urut' => 8, 'Poin' => 65, 'Siswa' => 'Sari', 'NIS' => ''],
        ];

        // Display the name and score of the student with the given number
        function displayStudentByNumber($number, $data) {
            foreach ($data as $student) {
                if ($student['No Urut'] == $number) {
                    echo "<p>Nama siswa dengan nomor urut $number adalah <strong>" . $student['Siswa'] . "</strong> dengan poin <strong>" . $student['Poin'] . "</strong></p>";
                    break;
                }
            }
        }

        // Display the names of all students with the given score
        function displayStudentsByScore($score, $data) {
            $students = [];
            foreach ($data as $student) {
                if ($student['Poin'] == $score) {
                    $students[] = $student['Siswa'];
                }
            }
            if (count($students) > 0) {
                echo "<p>Nama siswa yang memiliki poin $score adalah <strong>" . implode(', ', $students) . "</strong></p>";
            } else {
                echo "<p>Tidak ada siswa yang memiliki poin $score</p>";
            }
        }

        // Display the data
        displayStudentByNumber(5, $data);
        displayStudentsByScore(90, $data);
        displayStudentsByScore(100, $data);
        ?>
    </div>
</body>
</html>
