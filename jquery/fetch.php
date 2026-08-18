<?php

include 'db.php';

$sql="SELECT * FROM students ORDER BY id DESC";

$result=$conn->query($sql);

if($result->num_rows>0){

    while($row=$result->fetch_assoc()){

        ?>

        <tr>

            <td><?= htmlspecialchars($row['name']) ?></td>

            <td><?= htmlspecialchars($row['email']) ?></td>

            <td><?= htmlspecialchars($row['phone']) ?></td>

        </tr>

        <?php

    }

}else{

    echo "<tr><td colspan='3'>No Data Found</td></tr>";

}

?>