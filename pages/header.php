<header>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <form class="d-flex">
            <input class="form-control ms-5" type="search" placeholder="Search" aria-label="Search">
            <a class="navbar-brand none" href="../index.php"><span class="logo ms-3">Sharm</span></a>
        </form>
        
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><span class="logo ms-auto none_2">Sharm</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bd-highlight" id="navbarSupportedContent">
                <ul class="inf navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (!isset($_COOKIE['role'])):?>
                    <li class="nav-item p-2 bd-highlight inl">
                       <a class="nav-link active" aria-current="page" href="../pages/cart.php"><img style="width: 25px;" src="../img/cart.png" alt=""></a> 
                    </li>
                    <li class="nav-item p-2 bd-highlight inl">
                        <a class="nav-link" href="#" type="text" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="width: 30px;" src="../img/human.png" alt=""></a>
                    </li>
                    
                    <!-- Модальное окно -->
                    <div class="modal fade text-secondary" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                            <button type="text" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                        <form action="../pages/aut.php" method="POST">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1">Введите почту</label>
                                <input name="email2" type="email" id="form2Example1" class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Введите пароль</label>
                                <input name="pass2" type="password" id="form2Example2" class="form-control" />
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31">Запомнить меня</label>
                                </div>
                                </div>

                                <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Забыли пароль?</a>
                                </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4 enter">Войти</button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Ещё не зарегистрированы? <a href="../pages/reg.php" type="button" class="btn btn-primary" data-bs-toggle="modal2" data-bs-target="#exampleModal2">Зарегистрироваться</a></p>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Главная</a>
                    </li>
                    
                    <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Каталог
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/catalogWoman.php">Женская одежда</a></li>
                        <li><a class="dropdown-item" href="../pages/catalogMan.php">Мужская одежда</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/contacts.php">Контакты</a>
                    </li>
                </ul>
                <?php else:?>
                    <li class="nav-item">
                        <a href="pers.php" class="nav-link text-white">Личный кабинет</a>
                    </li>
                    <li class="nav-item">
                        <a href="exit.php" class="nav-link text-white">Выход</a>
                    </li>
                <?php endif;?>
            </div>
        </div>
    </nav>
</header>