<?php
require_once ('controllers/c_news.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href = "../public/css/style.css" rel = "stylesheet" type = "text/css" />
</head>
<body>
    <h3> News </h3>
    <?php
    foreach($news as $n)
    {
    ?>
    <div class = "news" >
    <img src="public/img/<?php echo $n->images ?>" width = "350px" height = "400px" />
    <h4><a href = "shownewsdetails.php?id = <?php echo $n->id ?>"> <?php echo $n->title ?></a></h4>
    <p><?php echo $n->brief ?></p>
    </div>
    <?php
    }
    ?>
</body>
</html>