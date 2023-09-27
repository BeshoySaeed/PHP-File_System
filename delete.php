<table>

    <tr>
        <th>Name</th>
        <th>email</th>
        <th>Phone</th>
        <th>Country</th>
        <th>Pass</th>
    </tr>

    <?php

    $index = $_GET["id"];

    $data = file("data.txt");
    unset($data[$index]);

    file_put_contents("data.txt",$data );
    header("location: add.php")

    ?>
</table>
