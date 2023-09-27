<table border="2">

    <tr>
        <th>Name</th>
        <th>email</th>
        <th>Phone</th>
        <th>Country</th>
        <th>Pass</th>
        <th>View</th>
        <th>Delete</th>
    </tr>

    <?php 
    // display any error
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        // convert array to string
        $data = implode(",", $_POST);
        if(strlen($data) > 0){
            file_put_contents("data.txt", $data . PHP_EOL, FILE_APPEND);
        }

        $arr_emp = file("data.txt");
        if(count($arr_emp) > 0){
            foreach($arr_emp as $key=> $val){
                $emp_data = explode(",", $val);
                if(count($emp_data) > 0){
                    echo "<tr>";
                    foreach($emp_data as $value){
                        echo "<td> $value </td>";
                    }
                    echo "<td> <a href='data.php?id=$key'>Vew</a></td>";
                    echo "<td> <a href='delete.php?id=$key'>delete</a></td>";
                    echo  "</tr>";
                }
            }
        }
    ?>
</table>
<a href="register.html" style="text-decoration: none;" >Back to register</a>