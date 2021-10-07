<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Это моя страница">
    <meta name="author" content="Aidar">
    <meta name="robots" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Это моя страница">

    <title>Андрей Браун - Веб разрабочтик</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/my_fonts.css">
    
    


</head>

<body>
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>


    <header>
        <?php
        include('nav.php');
        ?>
    </header>
    <main>
        <section class="main">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6 mt-5 pt-5">
                        <div class="title__container mt-5">
                            <h1>Привет <br>Я Андрей Браун</h1>
                            <h4>Фулл стек веб-разработчик и Android - разработчик</h4>
                            <input type="button" value="Обо мне">
                            <input type="button" value="Мои работы">

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>



    <section class="myInfo sect" id="my_info">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-8">
                    <div class="my_info">
                        <h3>ОБО МНЕ</h3>
                        <img src="img/title_line.png" alt="">
                        <div class="circle_photo">
                            <img src="img/circle_photo.png" alt="Тут должно быть моё фото)">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste repellat id cum odio at totam enim ut esse modi, odit eum eos error saepe eligendi velit, quia temporibus, impedit. Iste, consequatur, esse.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde porro obcaecati perspiciatis dignissimos, eaque iusto magni architecto asperiores error ad excepturi, commodi dolor fugit hic dolorum, adipisci aspernatur nemo. Quae fuga veritatis voluptatum!</p>
                        <div class="button_cv">
                            <button type="submit">
                                <img src="img/download_icon.png" alt="" /> Скачать резюме
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ability sect" id="ability">
        <div class="container">
            <div class="row">
                <div class="ability_container">
                    <h3>ЧТО Я УМЕЮ</h3>
                    <img src="img/line2.png" alt="">
                </div>
                <p></p>
                <div class="col-12">
                    <div class="ability_list">
                        <div class="col-xxl-3 col-xl-3 col-lg-3  col-6">
                            <img src="img/web-design.png" alt="">
                            <h4>Веб-Дизайн</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae earum dolores, beatae? Ducimus ipsum porro sed!</p>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3  col-6"><img src="img/sign.png" alt="">
                            <h4>Разработка</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nisi saepe nam, a!
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3  col-6"> <img src="img/rocket.png" alt="">
                            <h4>CEO-Оптимизация</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta velit, assumenda, quaerat deleniti architecto enim rerum.</p>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3  col-6">
                            <img src="img/grammofon.png" alt="">
                            <h4>Маркетинг</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aspernatur necessitatibus enim eos! Labore, necessitatibus?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="case sect" id="case">
        <div class="container">
            <div class="row">
                <div class="case_title">
                    <h3>КЕЙСЫ</h3>
                    <img src="img/line2.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste optio, voluptate minus atque mollitia ex sunt quis nam dolores perferendis dolorem.</p>
                </div>

                <div class="col-12">
                    <div class="case2">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/site-example.png" class="d-block mx-auto" alt="">
                                                
                                    <section class="case3">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-2">
                                                    <h3>CLIENT</h3><span><small>Какая-то компания</small></span>

                                                    <h3>WEBSITE</h3><span><small>http://www.somedomain.com</small></span>
                                                </div>
                                                <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-6 offset-xxl-1 offset-lg-2 offset-md-3">
                                                    <h3>Название проекта</h3><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit., sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</span>
                                                </div>

                                                <div class="col-3"><button type="button" value=""> Перейти на сайт
                                                    </button></div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/site-example.png" class="d-block mx-auto" alt="">
                                    
                                    <section class="case3">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-2">
                                                    <h3>CLIENT</h3><span><small>Какая-то компания</small></span>

                                                    <h3>WEBSITE</h3><span><small>http://www.somedomain.com</small></span>
                                                </div>
                                                <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-6 offset-xxl-1 offset-lg-2 offset-md-3">
                                                    <h3>Название проекта</h3><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit., sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</span>
                                                </div>

                                                <div class="col-3"><button type="button" value=""> Перейти на сайт
                                                    </button></div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/site-example.png" class="d-block mx-auto" alt="">
                                    
                                    <section class="case3">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-2">
                                                    <h3>CLIENT</h3><span><small>Какая-то компания</small></span>

                                                    <h3>WEBSITE</h3><span><small>http://www.somedomain.com</small></span>
                                                </div>
                                                <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-6 offset-xxl-1 offset-lg-2 offset-md-3">
                                                    <h3>Название проекта</h3><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit., sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</span>
                                                </div>

                                                <div class="col-3"><button type="button" value=""> Перейти на сайт
                                                    </button></div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="costs sect">
        <div class="container costs_container">
            <div class="row justify-content-center">
                <h2>Расчет стоимости</h2>
                <div class="col-8 ">
                    <h3 class="wow animate__animated animate__bounceInLeft">ТИП САЙТА</h3>
                    <select name="list1" id="list1">
                        <option disabled selected>Выберите пункт...</option>
                        <option value="1">Корпоративный сайт</option>
                        <option value="2">Сайт-визитка</option>
                        <option value="3">Интернет магазин</option>
                    </select>
                </div>
                <div class="col-8 ">
                    <h3 class="wow animate__animated animate__bounceInRight" data-wow-delay="0.5s">ДИЗАЙН</h3>
                    <select name="list2" id="list2">
                        <option disabled selected>Выберите пункт...</option>
                        <option value="1">Шаблонный</option>
                        <option value="2">Уникальный</option>
                        <option value="3">Сверхдекорированный</option>
                    </select>
                </div>
                <div class="col-8">
                    <h3 class="wow animate__animated animate__bounceInRight" data-wow-delay="1s">АДАПТИВНОСТЬ</h3>
                    <select name="list3" id="list3">
                        <option disabled selected>Выберите пункт...</option>
                        <option value="1">Не адаптивный</option>
                        <option value="2">Адаптивный</option>
                        <option value="3">Адаптивный + мобильные устройства</option>
                    </select>
                </div>


                <div class="col-8">
                    <div class="total_img">
                        <img src="img/grey_line.png" alt="">
                    </div>
                </div>


                <div class="row total_1 justify-content-center">
                    <div class="col-6">
                        <h4>Сроки</h4>
                    </div>
                    <div class="col-2">
                        <p id="dueDate">0</p>
                    </div>
                    <div class="col-6">
                        <h4>Стоимость</h4>
                    </div>
                    <div class="col-2">
                        <p id="totalPrice">0</p>
                    </div>
                </div>

                <div class="col d-flex align-items-center justify-content-center wow animate__animated animate__shakeX" data-wow-delay="2s"><button type="button" value="" id="button">Расчитать</button></div>
            </div>
        </div>
    </section>

    <section class="stats sect">
        <div class="container">
            <div class="row">
                <div class="stats_container">
                    <h3>НЕМНОГО СТАТИСТИКИ</h3>
                    <img src="img/line2.png" alt="">
                </div>
                <p></p>
                <div class="col-12">
                    <div class="stats_list ">
                        <div class="col-3 stats_blocks">
                            <img src="img/smile.png" alt="">
                            <h4 class="numberBir">0</h4>
                            <p>СЧАСТЛИВЫХ КЛИЕНТОВ</p>
                        </div>
                        <div class="col-3 stats_blocks">
                            <img src="img/sign2.png" alt="">
                            <h4 class="numberEki">0</h4>
                            <p>ЧАСОВ РАБОТЫ</p>
                        </div>

                        <div class="col-3 stats_blocks">
                            <img src="img/done.png" alt="">
                            <h4 class="numberUsh">0</h4>
                            <p>ПРОЕКТОВ ЗАВЕРШЕНО</p>
                        </div>
                        <div class="col-3 stats_blocks">
                            <img src="img/cup.png" alt="">
                            <h4 class="numberTort">0</h4>
                            <p>НАГРАД ПОЛУЧЕНО</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fd sect" id="fd">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-12">
                    <div class="fd">
                        <h3>ОТЗЫВЫ</h3>
                        <img src="img/title_line.png" alt="">

                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="1000000">
                                    <img src="img/face.png" class="d-block mx-auto " alt="...">
                                    <div class="carousel-caption d-block d-md-block">
                                        <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante <br>
                                            facilisis bibendum dolor feugiat at duis sed dapidus leo nec ornare diam.</small></p>
                                        <p><b>Михаил</b>, Ген директор ПАО "Газпром"</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="200000">
                                    <img src="img/face.png" class="d-block  mx-auto" alt="...">
                                    <div class="carousel-caption  d-md-block">
                                        <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante <br>
                                            facilisis bibendum dolor feugiat at duis sed dapidus leo nec ornare diam.</small></p>
                                        <p><b>Михаил</b>, Ген директор ПАО "Газпром"</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/face.png" class="d-block mx-auto" alt="...">
                                    <div class="carousel-caption  d-md-block">
                                        <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante <br>
                                            facilisis bibendum dolor feugiat at duis sed dapidus leo nec ornare diam.</small></p>
                                        <p><b>Михаил</b>, Ген директор ПАО "Газпром"</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <section class="contacts sect" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="contacts_container">
                        <h3>МОИ КОНТАКТЫ</h3>
                        <img src="img/title_line.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leo nec ornare diamcoccodo</p>
                    </div>
                        </div>
                        
                    <div class="row contacts_list col-10  justify-content-space-between mx-auto">

                        <div class="col"><img src="img/geo.png" alt="">
                            <p><a href="#mapO">г.Алматы<br>Кабанбай батыра 49</a></p>
                        </div>
                        <div class="col"><img src="img/convert.png" alt="">
                            <p><a href="mailto:info@companyname.com">info@companyname.com</a></p>
                        </div>
                        <div class="col"><img src="img/phone.png" alt="">
                            <p><a href="tel:+77772051599">+7(777)-205-15-99</a></p>
                        </div>
                    </div>
                
            </div>


            <div class="recall">
                <h3>ОСТАВЬТЕ МНЕ СООБЩЕНИЕ</h3>
                <p></p>
            </div>
            <div class="container">
               <form action="php/mail2.php" metod ="post">
                <div class="row forms d-flex justify-content-center">
                    <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-3 col-sm-2 col-12 d-xxl-flex d-xl-flex d-md-flex d-sm-flex justify-content-sm-end justify-content-center">
                        <input type="name" name="name_input2" value="" placeholder="Имя">
                    </div>

                    <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-3 col-sm-2 col-12 d-xxl-flex d-xl-flex d-md-flex d-sm-flex justify-content-sm-start justify-content-center">
                        <input type="email" name="user_email2" value="" placeholder="Email">
                    </div>

                    <div class="row forms d-flex justify-content-center">
                        <div class="col-sm-12 col-12 d-flex justify-content-center">
                            <textarea name="text_input2" id="1" cols="48" rows="10" value="" placeholder="Сообщение"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div class="send_button">
                                <input type="submit" value="Отправить">
                            </div>
                        </div>

                    </div>

                </div>
                </form>
            </div>


        </section>
  
       <div class="container">
        <div class="row" id="bg_popup">
            <div class="col-7" id="popup">
                <h2>Если Вы оставите заявку сейчас, <br> я предоставлю Вам скидку в размере <br> <big><b>25%</b>!!!</big></h2>
<button type="button" class="btn btn-primary d-block mx-auto mb-10" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Оставить Заявку</button>
                <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup').style.display='none'; return false;"> x</a>
            </div>
            
                

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Обратная связь</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
       <form action="php/mail.php" metod ="post">
        
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="user_email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPhone3" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
      <input type="phone" name="user_phone" class="form-control" id="inputTel">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-8 pt-0 mt-100">Вы первый раз на этом сайте?</legend>
    <div class="col-sm-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">Да</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">Нет</label>
      </div>
      
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="check" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Пользовательское соглашение
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
      </div>
      <div class="modal-footer">
        </div>
    </div>
  </div>
</div>
        </div>
        </div>
       
       
       
       
        <div class="tail" id="mapO">
                       <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A900b735362892f94261ab3ae9c37adf1baf3a30b248564726a5e14b5a32fa1bd&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=false"></script>
            <h6>Copyright 2021 Андрей Браун. Design by Web</h6>
        </div>

    </footer>

    <script>
        window.onload = function() {
            document.body.classList.add('loaded_hiding');
            window.setTimeout(function() {
                document.body.classList.add('loaded');
                document.body.classList.remove('loaded_hiding');
            }, 500);
        }

    </script>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/myScript.js"></script>
    

</body>

</html>
