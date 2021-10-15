<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
</head>
<body>
<?php
include __DIR__ . "/db/database.php"
?>
<?php foreach($decodedData as $key => $value){ ?>
    
    <div class="album_card">
    <img src="<?php echo $value['poster']; ?>" alt="">
    <?php
    echo $value['title'];
    echo $value['author'];
    echo $value['genre'];
    echo $value['year'];
    } ?>
    </div>
    
</body>
</html>