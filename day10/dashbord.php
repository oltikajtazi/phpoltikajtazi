<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
</head>
<body>

     <?php
     include_once("config.php");
     $sql = "select * fro user";
     $getUser = $conn->prepare($sql);

     $getUser->execute();

     $users=$getUser->fetchALL();
     ?>

     <thead>
        <table>

        <th>ID</th>
        <th>USERNAME</th>
        <th>SURNAME</th>
        <th>EMAIL</th>

      

</thead>

<tbody>
    <?php
    foreach($users as $user){

    
    ?>
    <tr>
        <td><? =$user['id']?>>/td>
        <td><? =$user['name']?>>/td>
        <td><? =$user['surname']?>>/td>
        <td><? =$user['email']?>>/td>

    </tr>
        
    <?php } ?>

</tbody>
</table>

  <a href="index.php">go to indeks</a>
</body>
</html>