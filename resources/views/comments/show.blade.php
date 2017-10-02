<?php

if(!empty($_POST)) {

} else { ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Post</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa, illo itaque libero optio sunt veniam voluptas. Animi aperiam architecto aut beatae dolorem doloribus eaque earum eligendi et excepturi fuga fugit harum illum ipsam laboriosam praesentium quas, quia recusandae rerum sunt totam unde veritatis. Beatae dolores doloribus error eveniet facilis quisquam? Cumque, excepturi sequi. Atque commodi debitis dignissimos hic, nemo nesciunt odio vero voluptate. Alias aperiam assumenda culpa, ea error molestias nam nemo nesciunt, porro quae sit soluta vel! Consequuntur eum ipsum itaque, laudantium nihil non nostrum numquam! Aliquam consequatur facere id laboriosam nam repellat voluptatibus. Aliquid animi quas repudiandae.</p>
    <hr>
    <h3><b>Комментарии: </b></h3>
    <div id="comments"></div>
    <form action="" method="post">
        <div class="form-group">
            <label for="message">Написать комментарий: </label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Добавить комментарий" class="btn btn-primary">
        </div>
    </form>
</div>
</body>
</html>
<?php } ?>
