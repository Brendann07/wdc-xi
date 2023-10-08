<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="nilai">nilai</label>
        <input type="number" name="nilai">
        <button type="submit" name="simpan">simpan</button>

        <?php
        if (isset($_POST['simpan'])) {
            $nilai = $_POST['nilai'];
            if ($nilai > 90) {
                echo "grade a";
            } elseif ($nilai > 80) {
                echo "grade b";
            } else {
                echo "grade e";
            }

        }

        ?>

    </form>

</body>

</html>