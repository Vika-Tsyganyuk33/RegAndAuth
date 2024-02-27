<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <script defer src="../script/script.js"></script>
</head>
<body>
    <div>
        <div class="container">
            <?php include("./header.php")?>
        </div>
    </div>
   
   <section class="table container">
    <div class="container">
        <img src="../img/arrow2.png" alt="">
        <a class="text-light" onclick="javascript:history.back(); return false;">Назад</a>
    </div>
    <section class="h-100 h-custom">
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                <div class="card-body p-4">

                    <div class="row">

                    <div class="col-lg-7">
                        <h5 class="mb-3"><a href="#!" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Корзина</a></h5>
                        <hr style="width: 1200px;">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                        </div>

                        <div class="card mb-3 wid" style="width: 1200px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                <img
                                    src="../img/m5.png"
                                    class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                </div>
                                <div class="ms-3">
                                <h5>Куртка UTILITY JACKET</h5>
                                <p class="small mb-0">Чёрного цвета</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">1 шт</h5>
                                </div>
                                <div style="width: 80px;">
                                <h5 class="mb-0">9 610 ₽</h5>
                                </div>
                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="card mb-3 wid" style="width: 1200px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                <img
                                    src="../img/w3.png" alt="Shopping item" style="width: 65px;">
                                </div>
                                <div class="ms-3">
                                <h5>Футболка Uniqlo U</h5>
                                <p class="small mb-0">Бежевого цвета</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">1 шт</h5>
                                </div>
                                <div style="width: 80px;">
                                <h5 class="mb-0">599 ₽</h5>
                                </div>
                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                        </div>
                        </div>

                    </div>
                    
                    <div class="mx-auto itog">
                        <b>Итого</b>
                        <p>10 209 ₽</p>
                    </div>
                    </div>
                    </div>

                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
   </section>
</body>
</html>