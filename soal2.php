<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Pecahan Uang</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Penentuan Pecahan Uang</h1>
        <?php
        // Deklarasi variabel uang tabungan Ani
        $uangTabungan = 1387500;

        // Daftar pecahan uang
        $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

        // Inisialisasi array untuk menyimpan banyaknya masing-masing pecahan uang
        $banyakPecahan = array();

        // Proses penentuan banyaknya masing-masing pecahan uang
        foreach ($pecahan as $nilai) {
            $banyakPecahan[$nilai] = intval($uangTabungan / $nilai);
            $uangTabungan %= $nilai;
        }
        ?>
        <table>
            <tr>
                <th>Nominal</th>
                <th>Banyaknya</th>
            </tr>
            <?php foreach ($banyakPecahan as $nominal => $banyak) { ?>
            <tr>
                <td>Rp. <?php echo number_format($nominal, 0, ',', '.'); ?></td>
                <td><?php echo $banyak; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
