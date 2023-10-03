<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage</title>
</head>
<body>
    <?php
        if(isset($st))
        {
            echo'<h1>'.$st.'</h1>';
        }
        ?>
    <?php
    if(isset($msg))
    {
        echo'<h2>'.$msg.'</h2>';
    }
    ?>
    <form method="post" action="<?=base_url('index.php/second/dbdata')?>">
        <label for="name">name:</label>
        <input type="text" name="name"><br>
        <label for="email">email:</label>
        <input type="email" name="email"><br>
        <label for="password">password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit">
        <input type="reset" name="reset">


    </form>
    <?=base_url()?>
    <br>
    <a href="<?=base_url('/index.php/Second/fetchdata')?>">view record</a>
</body>
</html>
