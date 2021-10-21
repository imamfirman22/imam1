<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume IMAM</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand" href="#page-top">
                <span class="d-block d-lg-none">Muhamad Imam Firmansyah</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.JPG" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#interests">Interests</a></li>
                
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <?php
                    include("koneksi.php");
                    $sql = "SELECT * FROM biodata";
                    $hasil = mysqli_query($koneksi, $sql);
                    $bio = mysqli_fetch_assoc($hasil)
                    ?>
                    <h1 class="mb-0">
                        <?= $bio['nama_depan']; ?>
                        <span class="text-primary"><?= $bio['nama_bel']; ?></span>
                    </h1>
                    <div class="subheading mb-5">
                         <?= $bio['alamat'];?>
                        <a href="mailto:name@email.com"><?= $bio['email'];?></a>
                    </div>
                    <p class="lead mb-5"><?= $bio['isi']; ?></p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://twitter.com/cacingalaska22"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/imamfirmansyahmuhamad/"><i class="fab fa-facebook-f"></i></a>
                    </div>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <?php
                    include("koneksi.php");
                    $sql = "SELECT * FROM experience";
                    $hasil = mysqli_query($koneksi, $sql);
                    $exp = mysqli_fetch_assoc($hasil)
                    ?>
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            
                            <div class="subheading mb-3"><?= $exp['jb1'];?></div>
                            <p><?= $exp['isi1'];?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?= $exp['mk1'];?></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            
                            <div class="subheading mb-3"><?= $exp['jb2'];?></div>
                            <p><?= $exp['isi2'];?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?= $exp['mk2'];?></span></div>
                    </div>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <?php
                    include("koneksi.php");
                    $sql = "SELECT * FROM edu";
                    $hasil = mysqli_query($koneksi, $sql);
                    $edu = mysqli_fetch_assoc($hasil)
                    ?>
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?= $edu['sk1'];?></h3>
                            <div class="subheading mb-3"><?= $edu['jur1'];?></div>
                            <div><?= $edu['isi1'];?></div>
                            
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?= $edu['lulus1'];?></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?= $edu['sk2'];?></h3>
                            <div class="subheading mb-3"><?= $edu['jur2'];?></div>
                            <p><?= $edu['isi2'];?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?= $edu['lulus2'];?></span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <?php
                    include("koneksi.php");
                    $sql = "SELECT * FROM skills";
                    $hasil = mysqli_query($koneksi, $sql);
                    $skl = mysqli_fetch_assoc($hasil)
                    ?>
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3"><?= $skl['judskil'];?></div>
                   
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?= $skl['isi1'];?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?= $skl['isi2'];?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?= $skl['isi3'];?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?= $skl['isi4'];?>
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <?php
                    include("koneksi.php");
                    $sql = "SELECT * FROM interest";
                    $hasil = mysqli_query($koneksi, $sql);
                    $ins = mysqli_fetch_assoc($hasil)
                    ?>
                    <h2 class="mb-5">Interests</h2>
                    <p><?= $ins['isi'];?></p>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
