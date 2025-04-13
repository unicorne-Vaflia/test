<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Test</title>

</head>
<body>


<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dbsait";
$port = "3306";




$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {}



    //read
  $sql = $pdo->prepare("SELECT * FROM dbsiat");
 $sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);

?>

    <style>


        table             {
            border-spacing: (1);
            border-collapse: collapse;
            background:lightgray;
            border-radius:30px;
            overflow:hidden;
            max-width:1600px;
            width:100%;
            margin:0 auto;
            position:relative;

            *               { position:relative }

            td,th           { padding-left:8px}

            thead tr        {
                height:60px;
                background:#FFED86;
                font-size:16px;
            }

            tbody tr        { height:48px; border-bottom:1px solid #E3F1D5 ;
                &:last-child  { border:0; }
            }


            }
        }


        @media #{$gl-xs}              {

            table                       { display:block;
                > *,tr,td,th              { display:block }

                thead                     { display:none }
                tbody tr                  { height:auto; padding:8px 0;
                    td                      { padding-left:45%; margin-bottom:12px;

    </style>


<table>
    <thead>
    <tr>
        <th>Категория</th>
        <th>Товар</th>
        <th>Остаток на складе</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $res) {
    ?>
    <tr>
        <td><?php echo $res->kat;   ?></td>
        <td><?php echo $res->tovar; ?></td>
        <td><?php echo $res->octatok; ?></td>

    </tr>
<?php } ?>
    </tbody>
    </table>



</body>

</html>