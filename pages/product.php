<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <script defer src="../script/script.js"></script>
</head>
<body class="container text-light bg-dark">
    <?php include("../pages/header.php")?>
    <main class="container text-light bg-dark mt-3 product">
        <div class="row align-items-start ">
            <div class="col-8 prod_center">
                <img class="product" src="../img/w1.png" alt="">
                <img class="dib" src="../img/w2_2.png" alt="">
            </div>
            <div class="col-4 text">
                <div class="mx-auto name">
                    <h3>Худи UNIQLO</h3>
                </div>
                <div class="mx-auto">
                    <p>Размер на модели: S INT.<br>Параметры модели: рост 176 см, грудь 89 см, талия 60 см, бедра 84 см.</p>
                    <p>Состав:<br>Материал 1: Хлопок - 70%, Полиэфир - 30%;<br>Материал 2: Хлопок - 82%, Полиэфир - 18%.</p>
                </div>
                <div class="mx-auto">
                    <a href="#" class="btn btn-primary border-light bg-dark mt-3">Добавить в корзину</a>
                </div>
            </div>
        </div>
    </main>
    <?php include("../pages/footer.php")?>
</body>
</html>