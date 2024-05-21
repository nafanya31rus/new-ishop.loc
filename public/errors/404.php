<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <style type="text/css">
        body {
            font-family: Arial, helvetica, sans-serif;
        }

        .wrap {
            width: 1000px;
            margin: 0 auto;
        }

        .logo {
            width: 430px;
            position: absolute;
            top: 25%;
            left: 35%;

            p a {
                color: #eee;
                font-size: 13px;
                margin-left: 30px;
                padding: 5px;
                background: #ff3366;
                text-decoration: none;
                -webkit-border-radius: .3em;
                -moz-border-radius: .3em;
                border-radius: .3em;
            }

            p a:hover {
                color: #fff;
            }

            .footer {
                position: absolute;
                bottom: 10px;
                right: 10px;
                font-size: 12px;
                color: #aaa;
            }

            .footer a {
                color: #666;
                text-decoration: none;
            }
        }

    </style>
</head>
<body>
<div class="wrap">
    <div class="logo">
        <img src="./errors/images/404.png" alt="">
        <p><a href="<?=PATH?>">Go Back To Home</a></p>
    </div>
</div>
<div class="footer">
    Design by nafanya <a href="#">nafanya</a>
</div>
</body>

</html>
