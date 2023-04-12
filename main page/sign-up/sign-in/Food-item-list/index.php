<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb2";


$mycon= mysqli_connect($servername,$username,$password,$database);

$que1 = "SELECT * FROM MYUSER";
$resultt1 = mysqli_query($mycon,$que1);

$number = mysqli_num_rows($resultt1);
while($number>0){
    $one = mysqli_fetch_assoc($resultt1);
    $username = $one["curname"];
    $number--;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Medicine list</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="cart/index.js"></script>
</head>

<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary fs-1 fw-bold d-flex justify-content-center align-items-center me-2 bs-icon"><i class="fas fa-pizza-slice text-center text-white-50 bg-dark"></i></span><span class="fs-3 fw-bold text-center text-white-50">MediOne</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Welcome <?php echo $username ?></a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="cart/index.php">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="demo.php">Log-out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="margin-top: 29px;">
        <div class="carousel-inner" style="height: 406.75px;">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/f1.png" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/f1.png" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/f1.png" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5" style="margin-right: 0px;margin-left: 0px;border-top-width: 0px;border-right-color: var(--bs-pink);border-left-width: 0px;border-left-style: groove;">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h1 class="fs-1 fw-bold text-center text-white-50 bg-dark bg-gradient border-3 border-primary shadow-lg d-block visible" style="width: 609px;height: 57.25px;margin-top: 20px;padding-top: 3px;border-top-left-radius: 47px;border-top-right-radius: 0px;border-bottom-right-radius: 47px;border-bottom-left-radius: 0px;border-top-style: groove;">MediOne</h1>
                <p class="lead font-monospace text-truncate fs-3 fw-normal text-center text-black-50 w-lg-50" style="margin: 18px;">Your Smart Medical Store....</p>
            </div>
        </div>
        
        <div class="row gx-3 gy-1 row-cols-1 row-cols-md-2 row-cols-xl-3" style="border-top-left-radius: 56px;">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/megacv%20625.png">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-1</p>
                        <h4 class="card-title">Mega-CV 625</h4>
                        <p class="card-text">Mega-CV 625 Tablet is a penicillin-type of antibiotic that helps your body fight infections caused by bacteria. It is used to treat infections of the lungs (e.g., pneumonia), ear, nasal sinus, urinary tract, skin, and soft tissue. It will not work for viral infections such as the common cold.<br></p><span><h4 class="card-title">Price: Rs.141</h4></span>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q1" id ="q1"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s1" id ="s1">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/dolo.png">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-2</p>
                        <h4 class="card-title">Dolo 650</h4>
                        <p class="card-text">Dolo 650 Tablet helps relieve pain and fever by blocking the release of certain chemical messengers responsible for fever and pain. It is used to treat headaches, migraine, nerve pain, toothache, sore throat, period (menstrual) pains, arthritis, muscle aches, and the common cold.<br></p><h4 class="card-title">Price: Rs.28</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q2" id ="q2"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s10">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/naxdom 500.png">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-3</p>
                        <h4 class="card-title">Naxdom 500</h4>
                        <p class="card-text">Naxdom 500 Tablet is a combination of two medicines used in the prevention of migraines. It blocks the release of certain chemical messengers that cause pain, inflammation, and fever. It also blocks the signals in the brain that cause nausea and vomiting associated with migraines.<br></p><h4 class="card-title">Price: Rs.113</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q3" id ="q3"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/okacet cold.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-4</p>
                        <h4 class="card-title">Okacet Cold Tablet</h4>
                        <p class="card-text">Okacet Cold Tablet is used in the treatment of common cold symptoms like runny nose, stuffy nose, sneezing, watery eyes, and congestion or stuffiness. It is also used to relieve pain and fever. You should keep taking this medicine for as long as your doctor recommends.<br></p><h4 class="card-title">Price: Rs.35</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q4" id ="q4"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s4">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/norflox.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-5</p>
                        <h4 class="card-title">Norflox-TZ RF Tablet</h4>
                        <p class="card-text">Norflox-TZ RF Tablet is a combination of two antibiotics that effectively treat diarrhea and dysentery. It kills the microorganisms to treat the infection.Norflox-TZ RF Tablet is a prescription medicine that can be taken with or without food.<br></p><h4 class="card-title">Price: Rs.85</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q5" id ="q5"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s5">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/hifenac.png">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-6</p>
                        <h4 class="card-title">Hifenac-P Tablet</h4>
                        <p class="card-text">Hifenac-P Tablet is a pain-relieving medicine. It is used to reduce pain and inflammation in conditions like rheumatoid arthritis, ankylosing spondylitis, and osteoarthritis. It may also be used to relieve muscle pain, back pain, toothache and used for short-term relief of pain.</p><h4 class="card-title">Price: Rs.72</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q6" id ="q6"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s6">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/kuffq.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-7</p>
                        <h4 class="card-title">Kuff Q Tablet</h4>
                        <p class="card-text">Kuff Q Tablet is a combination medicine used to treat common cold symptoms. It thins mucus in the nose, windpipe and lungs making it easier to cough out. It provides relief from seasonal allergic conditions such as runny nose, watery eyes, sneezing and congestion or stuffiness.</p><h4 class="card-title">Price: Rs.100</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q7" id ="q7"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s7">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/glucored.png">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-8</p>
                        <h4 class="card-title">Glucored Forte Tablet</h4>
                        <p class="card-text">Glucored Forte Tablet belongs to a category of medicines known as anti-diabetic drugs. It is a combination of two medicines used to treat type 2 diabetes mellitus in adults. It helps control blood sugar levels in people with diabetes.Glucored Forte Tablet should be taken with food.</p><h4 class="card-title">Price: Rs.44</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q8" id ="q8"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s8">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/amlokind.png">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Medicine Item-9</p>
                        <h4 class="card-title">Amlokind-AT Tablet</h4>
                        <p class="card-text">Amlokind-AT Tablet is used to treat hypertension (high blood pressure). This is a combination of two medicines that controls blood pressure when a single medication is not effective. It helps to lower high blood pressure and thus reduces the chances of future heart attack and stroke.</p><h4 class="card-title">Price: Rs.35</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q9" id ="q9"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s9">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script></form>
</body>


</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb2";

$mycon= mysqli_connect($servername,$username,$password,$database);



if(isset($_POST["s1"])){

    $q1 = $_POST['q1'];
    $q1 = "INSERT INTO CART VALUES(1,'Mega-CV 625',141,'$q1','assets/img/megacv 625.png')";
    $res1 = mysqli_query($mycon,$q1);

}

if(isset($_POST["s10"])){

    $q2 = $_POST['q2'];

    $q2 = "INSERT INTO CART VALUES(2,'Dolo 650',28,'$q2','assets/img/dolo.png')";
    $res2 = mysqli_query($mycon,$q2);

}

if(isset($_POST["s3"])){

    $q3 = $_POST['q3'];
    $q3 = "INSERT INTO CART VALUES(3,'Naxdom 500',113,'$q3','assets/img/naxdom 500.png')";
    $res3 = mysqli_query($mycon,$q3);

}

if(isset($_POST["s4"])){

    $q4 = $_POST['q4'];
    $q4 = "INSERT INTO CART VALUES(4,'Okacet Cold Tablet',35,'$q4','assets/img/okacet cold.jpg')";
    $res4 = mysqli_query($mycon,$q4);

}

if(isset($_POST["s5"])){

    $q5 = $_POST['q5'];
    $q5 = "INSERT INTO CART VALUES(5,'Norflox-TZ RF Tablet',85,'$q5','assets/img/norflox.jpg')";
    $res5 = mysqli_query($mycon,$q5);

}

if(isset($_POST["s6"])){

    $q6 = $_POST['q6'];
    $q6 = "INSERT INTO CART VALUES(6,'Hifenac-P Tablet',72,'q6','assets/img/hifenac.png')";
    $res6 = mysqli_query($mycon,$q6);

}

if(isset($_POST["s7"])){

    $q7 = $_POST['q7'];
    $q7 = "INSERT INTO CART VALUES(7,'Kuff Q Tablet',100,'$q7','assets/img/kuffq.jpg')";
    $res7 = mysqli_query($mycon,$q7);

}

if(isset($_POST["s8"])){

    $q8 = $_POST['q8'];
    $q8 = "INSERT INTO CART VALUES(8,'Glucored Forte Tablet',44,'$q8','assets/img/glucored.png')";
    $res8 = mysqli_query($mycon,$q8);

}

if(isset($_POST["s9"])){

    $q9 = $_POST['q9'];
    $q9 = "INSERT INTO CART VALUES(9,'Amlokind-AT Tablet',35,'$q9','assets/img/amolokind.png')";
    $res9 = mysqli_query($mycon,$q9);

}

// if(isset($_POST["s10"])){
//     $q2 = "INSERT INTO CART VALUES(2,'Pasta',40,1,'assets/img/Masala Pasta.jpg')";
//         $res2 = mysqli_query($mycon,$q2);   
// }


?>
