    <?php
    include "../control/database.php";
    $select=$con->prepare("SELECT * FROM settingsite");
    $select->execute();
    $row=$select->fetch();
    $sitename=$row['sitename'];
    $active=$row['active'];
    $selres=$con->prepare("SELECT * FROM result WHERE res_id=1");
    $selres->execute();
    $rowres=$selres->fetch();
    if($active==1){ ?>

<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>التعليم الالكتروني</title>
        <link href="https://fonts.googleapis.com/css?family=Cairo|Harmattan&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="../img/%D8%A7%D9%84%D9%84%D9%88%D8%AC%D9%88%20%D8%A7%D9%84%D8%B1%D8%B3%D9%85%D9%8A.png">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9%20%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9.css">
        <link rel="stylesheet" href="../css/bootstrapEditor.css">
        <link rel="stylesheet" href="../css/%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA.css">
        <link rel="stylesheet" href="../css/hover-min.css">
        <link rel="stylesheet" href="../css/%D8%B9%D9%86%20%D8%A7%D9%84%D9%85%D8%AF%D8%B1%D8%B3%D8%A9.css">
        <link rel="stylesheet" href="../css/%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%20%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A.css">
        <link rel="stylesheet" href="../css/%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA%20%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%20%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A.css">
    </head>
    <body>
        <div class="all-element">
            <!--الهيدر-->

            <header class="header">
                <div class="container container1">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-12 col-sm-2">

                                <img src="../img/alogo.png" alt="logo Responsive image" title="مدرسة سعداوي مجاهد الثانوية" class="logo img-fluid ">

                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8  col-sm-8 d-sm-block d-none img-header" >
                                <img src="../img/header.jpg" alt="bacground-header Responsive image" class="background-header img-fluid">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 ">
                            <div class="contianer-of-icon-span">
                                <div class="cont-span">
                                    <span class="span1">Email:<?php echo $row['email']; ?></span>
                                    <br>
                                    <span  class="span2">Hotline:<?php echo $row['number']; ?></span>
                                </div>
                                <div class="icon">
                                    <a href="https://www.facebook.com/%D9%85%D8%AF%D8%B1%D8%B3%D8%A9-%D8%B3%D8%B9%D8%AF%D8%A7%D9%88%D9%8A-%D9%85%D8%AC%D8%A7%D9%87%D8%AF-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%88%D9%8A%D8%A9-%D8%A7%D9%84%D9%85%D8%B4%D8%AA%D8%B1%D9%83%D8%A9-%D8%A8%D9%85%D9%8A%D8%AF%D9%88%D9%85-1821554047939510/?epa=SEARCH_BOX" target="_Blank">
                                    <i class="fab fa-facebook-square"></i></a>
                                    <i class="fab fa-twitter-square"></i>
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-youtube"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!---------------------------------------------------------------------------------------------------->
            <!--القائمة-->
            <section class="navbar-header">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="../index.php">الرئيسية <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="%D8%B9%D9%86%20%D8%A7%D9%84%D9%85%D8%AF%D8%B1%D8%B3%D8%A9.php">عن المدرسة</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="%D8%B1%D8%A4%D9%8A%D8%A9%20%D8%A7%D9%84%D9%85%D8%AF%D8%B1%D8%B3%D8%A9.php">رؤية المدرسة</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             النتيجة
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               <a class="dropdown-item" href="<?php echo $rowres['First']; ?>" target="_blank">نتيجة الصف الاول</a>
                              <a class="dropdown-item" href="<?php echo $rowres['second']; ?>" target="_blank">نتيجة الصف الثاني</a>
                              <a class="dropdown-item last-imtes" href="<?php echo $rowres['third']; ?>" target="_blank">نتيجة الصف الثالث</a>
                            </div>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link" href="%D8%A7%D8%AA%D8%B5%D9%84%20%D8%A8%D9%86%D8%A7.php">اتصل بنا</a>
                          </li>
                        </ul>
                      </div>
                </nav>
            </section>
            <!-------------------------------------------------------------------------------------------------->
            <!--التعليم الالكتروني-->
            <section>
                    <div class="science-electrinc">
                        <div class="years-of-subject">
                        <div class="container">
                            <div class="fisrt-year-button">
                                <button >الصف الاول الثانوي</button>
                            </div>
                            <div class="second-year-button">
                                <button >الصف الثاني الثانوي</button>
                            </div>
                            <div class="third-year-button">
                                <button >الصف الثالث الثانوي</button>
                            </div>
                        </div>
                        </div>
                        <div class="first-year-sebject">
                            <div class="arrows-back1">
                                <i class="fas fa-arrow-left back1"></i>
                            </div>
                            <div class="subject-1">
                                <a href="file:///F:/myProject/html/arabic1.html"><img src="../img/%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A.png"></a>
                                <h3>اللغة العربية</h3>
                            </div>
                            <div class="subject-2">
                                <a href="file:///F:/myProject/html/Eng1.html">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A.png"></a>
                                <h3>اللغة الانجليزية</h3>
                            </div>
                            <div class="subject-3">
                                <a href="file:///F:/myProject/html/france1.html"><img src="../img/%D8%A7%D9%84%D9%84%D8%BA%D8%A9%20%D8%A7%D9%84%D9%81%D8%B1%D9%86%D8%B3%D9%8A%D8%A9.png"></a>
                                <h3>اللغة الفرنسية</h3>
                            </div>
                            <div class="subject-4">
                                <img src="../img/%D8%A7%D9%84%D8%AC%D8%A8%D8%B1.png">
                                <h3>الرياضيات</h3>
                            </div>
                            <div class="subject-5">
                                <img src="../img/%D8%A7%D9%84%D9%81%D9%8A%D8%B2%D9%8A%D8%A7%D8%A1.png">
                                <h3> الفيزياء</h3>
                            </div>
                            <div class="subject-6">
                                <img src="../img/%D8%A7%D9%84%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE.png">
                                <h3>التاريخ</h3>
                            </div>
                            <div class="subject-7">
                                <img src="../img/%D8%A7%D9%84%D8%AC%D8%BA%D8%B1%D8%A7%D9%81%D9%8A%D8%A7.png">
                                <h3>الجغرافيا </h3>
                            </div>
                            <div class="subject-8">
                                <img src="../img/%D8%A7%D9%84%D9%81%D9%84%D8%B3%D9%81%D8%A9.png">
                                <h3>الفلسفة </h3>
                            </div>
                            <div class="subject-9">
                                <img src="../img/%D8%A7%D9%84%D9%83%D9%8A%D9%85%D9%8A%D8%A7%D8%A1.png">
                                <h3>الكيمياء </h3>
                            </div>
                            <div class="subject-10">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D8%AD%D9%8A%D8%A7%D8%A1.png">
                                <h3>الأحياء</h3>
                            </div>
                        </div>
                        <!-- الشعب الادبي والعلمي -->
                        <div class="subject-of-types">
                            <div class="arrows-back1">
                                <i class="fas fa-arrow-left back2"></i>
                            </div>
                                <div class="science-button">
                                    <button >الشعبة العلمية</button>
                                </div>
                                <div class="literary-button">
                                    <button >الشعبة الادبية</button>
                                </div>
                        </div>
                        <div class="second-year-subject">
                            <div class="scientific-department">
                                <div class="arrows-back3">
                                <i class="fas fa-arrow-left back3"></i>
                                </div>
                                <div class="subject-1">
                                <img src="../img/%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A.png">
                                <h3>اللغة العربية</h3>
                            </div>
                            <div class="subject-2">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A.png">
                                <h3>اللغة الانجليزية</h3>
                            </div>
                            <div class="subject-3">
                                <img src="../img/%D8%A7%D9%84%D9%84%D8%BA%D8%A9%20%D8%A7%D9%84%D9%81%D8%B1%D9%86%D8%B3%D9%8A%D8%A9.png">
                                <h3>اللغة الفرنسية</h3>
                            </div>
                            <div class="subject-4">
                                <img src="../img/%D8%A7%D9%84%D8%AC%D8%A8%D8%B1.png">
                                <h3>الرياضيات</h3>
                            </div>
                            <div class="subject-5">
                                <img src="../img/%D8%A7%D9%84%D9%81%D9%8A%D8%B2%D9%8A%D8%A7%D8%A1.png">
                                <h3> الفيزياء</h3>
                            </div>
                            <div class="subject-6">
                                <img src="../img/%D8%A7%D9%84%D9%83%D9%8A%D9%85%D9%8A%D8%A7%D8%A1.png">
                                <h3>الكيمياء </h3>
                            </div>
                            <div class="subject-7">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D8%AD%D9%8A%D8%A7%D8%A1.png">
                                <h3>الأحياء</h3>
                            </div>
                            </div>

                            <div class="Literary-department">
                                <div class="arrows-back4">
                                <i class="fas fa-arrow-left back4"></i>
                                </div>
                                <div class="subject-1">
                                <img src="../img/%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A.png">
                                <h3>اللغة العربية</h3>
                            </div>
                            <div class="subject-2">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A.png">
                                <h3>اللغة الانجليزية</h3>
                            </div>
                            <div class="subject-3">
                                <img src="../img/%D8%A7%D9%84%D9%84%D8%BA%D8%A9%20%D8%A7%D9%84%D9%81%D8%B1%D9%86%D8%B3%D9%8A%D8%A9.png">
                                <h3>اللغة الفرنسية</h3>
                            </div>
                            <div class="subject-4">
                                <img src="../img/%D8%A7%D9%84%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE.png">
                                <h3>التاريخ</h3>
                            </div>
                            <div class="subject-5">
                                <img src="../img/%D8%A7%D9%84%D8%AC%D8%BA%D8%B1%D8%A7%D9%81%D9%8A%D8%A7.png">
                                <h3>الجغرافيا </h3>
                            </div>
                            <div class="subject-6">
                                <img src="../img/%D8%A7%D9%84%D9%81%D9%84%D8%B3%D9%81%D8%A9.png">
                                <h3>الفلسفة </h3>
                            </div>
                            <div class="subject-7">
                                <img src="../img/%D8%B9%D9%84%D9%85%20%D8%A7%D9%84%D9%86%D9%81%D8%B3.png">
                                <h3>علم النفس والاجتماع </h3>
                            </div>
                        </div>
                    </div>
                        <!--شعب تالته ثانوي-->
                        <div class="subject-of-types-third">
                            <div class="arrows-back1">
                                <i class="fas fa-arrow-left back5"></i>
                            </div>
                                <div class="science-button">
                                    <button >شعبة علمي علوم</button>
                                </div>
                                <div class="math-button">
                                    <button >شعبة علمي رياضة</button>
                                </div>
                                <div class="literary-button">
                                    <button >الشعبة الادبية</button>
                                </div>
                        </div>
                        <div class="third-year-subject">
                            <div class="science-department">
                                <div class="arrows-back6">
                                <i class="fas fa-arrow-left back6"></i>
                            </div>
                                <div class="subject-1">
                                <img src="../img/%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A.png">
                                <h3>اللغة العربية</h3>
                            </div>
                            <div class="subject-2">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A.png">
                                <h3>اللغة الانجليزية</h3>
                            </div>
                            <div class="subject-3">
                                <img src="../img/%D8%A7%D9%84%D9%84%D8%BA%D8%A9%20%D8%A7%D9%84%D9%81%D8%B1%D9%86%D8%B3%D9%8A%D8%A9.png">
                                <h3>اللغة الفرنسية</h3>
                            </div>
                            <div class="subject-4">
                                <img src="../img/%D8%A7%D9%84%D8%AC%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7.png">
                                <h3>الجولوجيا</h3>
                            </div>
                            <div class="subject-5">
                                <img src="../img/%D8%A7%D9%84%D9%81%D9%8A%D8%B2%D9%8A%D8%A7%D8%A1.png">
                                <h3> الفيزياء</h3>
                            </div>
                            <div class="subject-6">
                                <img src="../img/%D8%A7%D9%84%D9%83%D9%8A%D9%85%D9%8A%D8%A7%D8%A1.png">
                                <h3>الكيمياء </h3>
                            </div>
                            <div class="subject-7">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D8%AD%D9%8A%D8%A7%D8%A1.png">
                                <h3>الأحياء</h3>
                            </div>
                            </div>

                            <div class="math-department">
                                <div class="arrows-back7">
                                <i class="fas fa-arrow-left back7"></i>
                            </div>
                                <div class="subject-1">
                                <img src="../img/%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A.png">
                                <h3>اللغة العربية</h3>
                            </div>
                            <div class="subject-2">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A.png">
                                <h3>اللغة الانجليزية</h3>
                            </div>
                            <div class="subject-3">
                                <img src="../img/%D8%A7%D9%84%D9%84%D8%BA%D8%A9%20%D8%A7%D9%84%D9%81%D8%B1%D9%86%D8%B3%D9%8A%D8%A9.png">
                                <h3>اللغة الفرنسية</h3>
                            </div>
                            <div class="subject-4">
                                <img src="../img/%D8%A7%D9%84%D8%AC%D8%A8%D8%B1.png">
                                <h3>الرياضة البحته</h3>
                            </div>
                            <div class="subject-5">
                                <img src="../img/%D8%A7%D9%84%D9%81%D9%8A%D8%B2%D9%8A%D8%A7%D8%A1.png">
                                <h3> الفيزياء</h3>
                            </div>
                            <div class="subject-6">
                                <img src="../img/%D8%A7%D9%84%D9%83%D9%8A%D9%85%D9%8A%D8%A7%D8%A1.png">
                                <h3>الكيمياء </h3>
                            </div>
                            <div class="subject-7">
                                <img src="../img/%D8%A7%D9%84%D8%A8%D8%AD%D8%AA%D9%87.png">
                                <h3>الرياضة التطبيقية</h3>
                            </div>
                            </div>
                            <!--قسم ادبي تالته ثانوي-->
                            <div class="Literary-department-third">
                                <div class="arrows-back8">
                                <i class="fas fa-arrow-left back8"></i>
                            </div>
                                <div class="subject-1">
                                <img src="../img/%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A.png">
                                <h3>اللغة العربية</h3>
                            </div>
                            <div class="subject-2">
                                <img src="../img/%D8%A7%D9%84%D8%A7%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A.png">
                                <h3>اللغة الانجليزية</h3>
                            </div>
                            <div class="subject-3">
                                <img src="../img/%D8%A7%D9%84%D9%84%D8%BA%D8%A9%20%D8%A7%D9%84%D9%81%D8%B1%D9%86%D8%B3%D9%8A%D8%A9.png">
                                <h3>اللغة الفرنسية</h3>
                            </div>

                            <div class="subject-4">
                                <img src="../img/%D8%A7%D9%84%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE.png">
                                <h3>التاريخ</h3>
                            </div>
                            <div class="subject-5">
                                <img src="../img/%D8%A7%D9%84%D8%AC%D8%BA%D8%B1%D8%A7%D9%81%D9%8A%D8%A7.png">
                                <h3>الجغرافيا </h3>
                            </div>
                            <div class="subject-6">
                                <img src="../img/%D8%A7%D9%84%D9%81%D9%84%D8%B3%D9%81%D8%A9.png">
                                <h3>الفلسفة </h3>
                            </div>
                            <div class="subject-7">
                                <img src="../img/%D8%B9%D9%84%D9%85%20%D8%A7%D9%84%D9%86%D9%81%D8%B3.png">
                                <h3>علم النفس والاجتماع </h3>
                            </div>

                            </div>
                        </div>
                    </div>
            </section>
            <!------------------------------------------------------------------------------------------------>
            <!--العنوان-->
            <section class="address adress-education-school">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <iframe  class="iframe-version-school" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.847073538829!2d31.16635802419706!3d29.374766608567963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145991ab3060f175%3A0x3eafe87fca1422ee!2z2YXYr9ix2LPZhyDYp9mE2YXYsdit2YjZhSDYs9i52K_Yp9mI2Yog2YXYrNin2YfYryDYp9mE2YXYtNiq2LHZg9ip!5e0!3m2!1sar!2seg!4v1582213559549!5m2!1sar!2seg" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="col">
                            <div class="inforamtion-call inforamtion-call-education-school">
                                <h2>بيانات الاتصال</h2>
                                <div class="inforamtion-call-small">
                                    <h3>العنوان</h3>
                                    <p><?php echo $row['address']; ?></p>
                                    <h3>الرقم المختصر</h3>
                                    <p><?php echo $row['number']; ?></p>
                                    <h3>البريد الالكتروني</h3>
                                    <p><?php echo $row['email']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!------------------------------------------------------------------------------------------------->
            <!--الفوتر-->
            <footer class="footer footer-education-school">
                <div class="container">
                    <div class="footer-word">
                        <p> مدرسة سعداوي مجاهد &copy; Copyright  </p>
                        <p>designed by <a href="https://www.facebook.com/profile.php?id=100011445331879" target="_blank" class="designed hvr-pulse">Mahmoud Nasr</a> 2020</p>
                    </div>
                </div>
            </footer>
            <!------------------------------------------------------------------------------------------------>
        </div>
        <script src="../Js/jquery-3.4.1.min.js"></script>
        <script src="../Js/jquery.nicescroll.min.js"></script>
        <script src="../Js/bootstrap.min.js"></script>
        <script src="../Js/javaScript.js"></script>
    </body>
</html>
<?php }
else{ ?>
    <!DOCTYPE html>
    <html lang="ar">
        <head>
            <title>التعليم الالكتروني</title>
            <link rel="stylesheet" href="../css/closepage.css">
            <link rel="shortcut icon" href="../img/%D8%A7%D9%84%D9%84%D9%88%D8%AC%D9%88%20%D8%A7%D9%84%D8%B1%D8%B3%D9%85%D9%8A.png">
        </head>
        <body>
            <div>
                <img src="../img/%D8%A7%D9%84%D8%B5%D9%8A%D8%A7%D9%86%D8%A9.gif">
            </div>
        </body>
</html>

<?php }
?>
