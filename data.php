<table border="2">

    <tr>
        <th>Name</th>
        <th>email</th>
        <th>Phone</th>
        <th>Country</th>
        <th>Pass</th>
    </tr>

    <?php  

    $index = $_GET["id"];

    $emp_data = file("data.txt")[$index];
    $emp_sp_data = explode(',', $emp_data);
    echo "<tr>";
    foreach($emp_sp_data as $val){
        echo "<td> $val </td>";
    }
    echo "</tr>";


    ?>


</table>
