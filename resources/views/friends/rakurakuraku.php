    <?php
    $username = 'root';
    $password = '';

    $database = new PDO('mysql:host=localhost;dbname=friends;charset=UTF8;', $username, $password);

   
    if ($_POST['name']) {
      
        $sql = 'INSERT INTO friend (name) VALUES(:name)';
        $statement = $database->prepare($sql);
        $statement->bindParam(':name', $_POST['name']);
        $statement->execute();
        $statement = null;
    }
 
    $sql = 'SELECT * FROM friend ORDER BY created_at DESC';
    $statement = $database->query($sql);
    $records = $statement->fetchAll();
    $statement = null;
    $database = null;
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ようこそ、れんたろファンクラブへ!!</title>
         <link rel="stylesheet" href="rakurakuraku.css">
    </head>
    <body>
      
          <ul>
            <?php
                if ($records) {
                    foreach ($records as $record) {
                        $name = $record['name'];
            ?>
                        <li><?php print htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></li>
         
       
            <?php
                                                    }
                            }
             ?>
            </ul>
       
       <?php  $cnt=count($records);
       echo "<center>  $cnt   人のファンがいるよ！</center>" ;
           
       ?> 
           
         <p>これで君もれんたろファンクラブの一員だ！<br>
         おめでとう！</p>  
           
           
           
           
           
           
        </body>
        </html>