<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <script defer src="script/script.js"></script>
</head>
<body class="container text-light bg-dark">
    <?php include("pages/header.php")?>
    <main class="container text-light bg-dark mt-3">
        <section class="container choice">
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col-5">
                    <a href="../pages/catalogWoman.php"><img src="img/Woman.png" alt=""></a>
                    </div>
                    <div class="col">
                    
                    </div>
                    <div class="col-5">
                    <a href="../pages/catalogMan.php"><img src="img/Man.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-5 p-5">
                    <p class="bold">Доставим на следующий день</p>
                    <p>В Москве и 60 городах России. Подробнее о других городах здесь</p>
                    </div>
                    <div class="col">
                    
                    </div>
                    <div class="col-5 p-5">
                    <p class="bold">Примерьте перед покупкой</p>
                    <p>Оплачивайте только то, что вам подошло и понравилось!</p>
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col-5 p-5 pt-0">
                    <p class="bold">Оплачивайте как вам удобно</p>
                    <p>Наличными или банковской картой. У курьеров LM Express есть терминал для оплаты</p>
                    </div>
                    <div class="col">
                    
                    </div>
                    <div class="col-5 p-5 pt-0">
                    <p class="bold">Бережное отношение</p>
                    <p>Выбирать натуральное, давать вторую жизнь вещам, заботиться о себе и мире вокруг</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/carousel.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/carousel2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="container text-dark">
            <h3 class="my-4 text-light">Лучшие предложения</h3>
            <div class="container text-center cen">
                <div class="row align-items-start">
                    <div class="col mx-auto my-2">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="img/w1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Худи UNIQLO</h5>
                                <p class="card-text">Размер на модели: S INT. Параметры модели: рост 176 см, грудь 89 см, талия 60 см, бедра 84 см.</p>
                                <p class="card-text text-end">2 999 ₽</p>
                                <a href="./pages/product.php" class="btn btn-primary border-light bg-dark">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-auto my-2">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="img/m1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Рубашка джинсовая</h5>
                                <p class="card-text">Размер на модели: M INT. Параметры модели: рост 187 см, грудь 86 см, талия 67 см, бедра 92 см.</p>
                                <p class="card-text text-end">1 999 ₽</p>
                                <a href="#" class="btn btn-primary border-light bg-dark">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-auto my-2">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="img/w3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Футболка Uniqlo U</h5>
                                <p class="card-text">Размер на модели: S INT. Параметры модели: рост 176 см, грудь 89 см, талия 60 см, бедра 84 см.</p>
                                <p class="card-text text-end">599 ₽</p>
                                <a href="#" class="btn btn-primary border-light bg-dark">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-auto my-2">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="img/m3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Костюм спортивный Puma</h5>
                                <p class="card-text">Размер на модели: M INT. Параметры модели: рост 189 см, грудь 103 см, талия 78 см, бедра 98 см.</p>
                                <p class="card-text text-end">7 990 ₽</p>
                                <a href="#" class="btn btn-primary border-light bg-dark">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("pages/footer.php")?>
</body>
</html>