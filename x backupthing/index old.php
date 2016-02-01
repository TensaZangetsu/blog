<?php
print_r($_GET);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        print_r($_POST);
    }
$cookiename='Coookie';
$value=100;
$expire=time() + (60*60*24*7);
setcookie($cookiename, $value, $expire);
 ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Skadi Design</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        </script>
    </head>

    <body>
        <br>
        <div class="container">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group form-horizontal">
                    <input class="form-control" type="text" name="name" placeholder="name">
                    <br>
                    <input class="form-control" type="text" name="email" placeholder="email">
                    <br>
                    <button type="submit" class="btn btn-default" name="submit">Primary</button>
                </div>
            </form>
            <br>
            <a href='index.php?id=10' class="btn-primary">Link</a>
        </div>


    </body>

    </html>
