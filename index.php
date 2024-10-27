<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/lets_job-removebg-preview.png" type="image/x-icon">
    <title>Lest Job | Home</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--fontawesom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">


    <!-- <script>
        function addEducationField() {
            var container = document.getElementById("educationContainer");

            // Create new div for the education information
            var newDiv = document.createElement("div");
            newDiv.classList.add("input-group", "mb-3");

            // Create institute input field
            var instituteSpan = document.createElement("span");
            instituteSpan.classList.add("input-group-text");
            instituteSpan.textContent = "Institute";

            var instituteInput = document.createElement("input");
            instituteInput.type = "text";
            instituteInput.classList.add("form-control");
            instituteInput.setAttribute("aria-label", "Sizing example input");
            instituteInput.setAttribute("aria-describedby", "inputGroup-sizing-default");

            // Append institute elements to the new div
            newDiv.appendChild(instituteSpan);
            newDiv.appendChild(instituteInput);

            // Create education level input field
            var levelSpan = document.createElement("span");
            levelSpan.classList.add("input-group-text");
            levelSpan.textContent = "Edu. Level";

            var levelInput = document.createElement("input");
            levelInput.type = "text";
            levelInput.classList.add("form-control");
            levelInput.setAttribute("aria-label", "Sizing example input");
            levelInput.setAttribute("aria-describedby", "inputGroup-sizing-sm");

            // Create a new div for the education level input field
            var levelDiv = document.createElement("div");
            levelDiv.classList.add("input-group", "input-group-sm", "mb-3");
            levelDiv.appendChild(levelSpan);
            levelDiv.appendChild(levelInput);

            // Append the education level div to the main div
            newDiv.appendChild(levelDiv);

            // Append the new div to the container
            container.appendChild(newDiv);
        }
    </script> -->
</head>

<body>
    <style>

    body.dark-mode {
        background-color: #121212;
        color: #ffffff;
    }
    .dark-mode .bg-white {
        background-color: #333333 !important;
    }
    .dark-mode .text-muted {
        color: #bbbbbb !important;
    }

/* Mengatur navbar agar elemen-elemen berada di tengah */
.navbar {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 0; /* Menambah jarak vertikal untuk navbar */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan bayangan lembut */
    background-color: #fff;
}

/* Mengatur container agar konten berada di tengah */
.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

/* Styling untuk logo di navbar */
.navbar-brand img {
    transition: transform 0.3s ease;
}

.navbar-brand img:hover {
    transform: scale(1.05); /* Efek zoom ketika dihover */
}

/* Mengatur tampilan menu agar berada di tengah */
.navbar-nav {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
}

/* Styling untuk link di navbar */
.navbar-nav .nav-item .nav-link {
    color: #fff;
    font-size: 16px;
    padding: 10px 20px;
    background-color: #007bff; /* Warna biru */
    border-radius: 8px; /* Menambahkan sudut melengkung */
    margin-left: 15px; /* Memberikan jarak antar menu */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Transisi halus */
}

.navbar-nav .nav-item .nav-link:hover {
    background-color: #0056b3; /* Warna biru gelap saat dihover */
    transform: translateY(-2px); /* Efek mengambang saat dihover */
}

/* Profil dropdown agar tetap di sebelah kanan */
.dropdown {
    margin-left: auto;
}

.dropdown img {
    border-radius: 50%; /* Menambahkan border radius untuk avatar */
    transition: transform 0.3s ease;
}

.dropdown img:hover {
    transform: scale(1.1); /* Zoom avatar saat dihover */
}

/* Dropdown menu styling */
.dropdown-menu {
    border-radius: 8px;
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.dropdown-item {
    color: #333;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #007bff;
    color: #fff;
}

/* Responsif: Tampilan di layar kecil */
@media (max-width: 991px) {
    .navbar-nav {
        flex-direction: column;
        text-align: center;
    }

    .navbar-nav .nav-item {
        margin-bottom: 10px;
    }
}

.form-check-label {
    font-size: 16px;
    color: #333; 
    margin-left: 5px;
    cursor: pointer;
    transition: color 0.3s ease; /* Transisi halus saat dihover */
}

.form-check-label:hover {
    color: #007bff; /* Ganti warna teks saat dihover */
}




       
    </style>
    
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <img src="img/lets_job-removebg-preview.png" width="100px" height="100px" alt="Lets Job" />
        </a>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Fitur/StivaForumDev/preview.php">Forum Diskusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Fitur/CV_Template/CV/resume.html">CV Template</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Fitur/Course/video.html">Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Fitur/rating_company/index.php">Review Perusahaan</a>
                </li>
            </ul>
        </div>

        <!-- Profile dropdown -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/userDefault.jpg" alt="avatar" width="32" height="32" class="rounded-circle me-2">
                <span class="fs-4">Masuk Sebagai</span>
            </a>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="./pages/Login.php">Pelamar</a></li>
                <li><a class="dropdown-item" href="./pages/LoginCompany.php">Perusahaan</a></li>
            </ul>
        </div>
    </div>
</nav>

    <!--slider-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide img-fluid w-100 " src="./img/bg.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left" tyle="color: blue;">
                        <h1><img class="img-fluid mt-3" src="img/g-removebg-preview.png" height="10px" alt="Lets Job" /></h1>
                        <h1 class="text-dark"></h1>
                        <h4 class="text-primary">Daftar<h4>
                                <a class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal"
                                    data-bs-target="#userModal" href="./pages/Login.php" role="button">Pelamar</a>
                                <a class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal"
                                    data-bs-target="#companyModal" href="./pages/Login.php" role="button">Perusahaan</a>
                                <!-- create from modal -->
                                <!-- userModal -->
                                <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title text-dark fs-2" id="exampleModalLabel">
                                                        Daftar sebagai pelamar
                                                    </h1>
                                                    <span class="text-muted fs-7">Bergabung dengan kami untuk menemukan sesuatu</span>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="./pages/server/userRegistrationProcess.php" method="POST">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" name="FirstName" id=""
                                                                class="form-control" placeholder="first name" />
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" name="LastName" id=""
                                                                class="form-control" placeholder="last name" />
                                                        </div>
                                                    </div>

                                                    <input type="text" name="UserName" class="form-control my-3"
                                                        placeholder="Username" id="" />
                                                    <input type="email" name="Email" class="form-control my-3"
                                                        placeholder="Email" id="" />

                                                    <div class="row">
                                                        <div class="col">

                                                            <div class="">
                                                                <span class="text-muted fs-7">
                                                                    Jenis Kelamin
                                                                </span>
                                                                <div class="d-flex justify-content-evenly mt-2">
                                                                    <div class="Laki-Laki">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Laki-Laki
                                                                        </label>
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" id="flexRadioDefault1"
                                                                            value="Male" checked />
                                                                    </div>
                                                                    <div class="">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault2">
                                                                            Perempuan
                                                                        </label>
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" id="flexRadioDefault2"
                                                                            value="Female" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <span class="text-muted fs-7">
                                                                Tanggal Lahir
                                                            </span>
                                                            <input type="date" name="dateofbirth" class="form-control"
                                                                id="" />
                                                        </div>
                                                    </div>

                                                    <input type="tel" name="Phone" class="form-control my-3"
                                                        placeholder="Phone No" id="" />

                                                    <input type="password" name="Password" class="form-control my-3"
                                                        placeholder="password" id="" />

                                                    <input type="text" name="Address" class="form-control my-3"
                                                        placeholder="Address" id="" />
                                                    <input type="text" name="Education" class="form-control my-3"
                                                        placeholder="Education" id="" />


                                                    <textarea class="form-control my-3" id="description"
                                                        name="Description" placeholder="Bio eg:-tech enthusiast"
                                                        oninput="countWords()" maxlength="200"></textarea>

                                                    <textarea class="form-control my-3" id="description" name="about"
                                                        placeholder="About me" oninput="countWords()"
                                                        maxlength="200"></textarea>



                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">
                                                            Daftar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- company Modal -->
                                <div class="modal fade" id="companyModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title text-dark fs-2" id="exampleModalLabel">
                                                        Daftar sebagai perusahaan
                                                    </h1>
                                                    <span class="text-muted fs-7">Bergabung dengan kami untuk menemukan sesuatu</span>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="./pages/server/comapanyRegistrationProcess.php" method="post">
                                                <div class="modal-body">

                                                    <input type="text" name="companyname" class="form-control my-3"
                                                        placeholder="Company Name" id="" />

                                                    <input type="email" name="email" class="form-control my-3"
                                                        placeholder="Email" id="" />

                                                    <input type="text" name="address" class="form-control my-3"
                                                        placeholder="Address" id="" />

                                                    <textarea class="form-control my-3" id="description"
                                                        name="description" placeholder="Description"
                                                        oninput="countWords()" maxlength="200"></textarea>

                                                    <input type="password" name="password" class="form-control my-3"
                                                        placeholder="password" id="" />

                                                    <input type="text" name="employee" class="form-control my-3"
                                                        placeholder="Number of employee" id="" />
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-outline-primary my-3"
                                                        data-bs-dismiss="modal">
                                                        Daftar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing p-3">

        <!-- Three columns of text below the carousel -->
        <div class="row mt-4">
            <div class="col-lg-4" style="text-align: center;">
                <img class="rounded mb-2" src="./img/search1.png" alt="Generic placeholder image" width="140"
                    height="140">
                <h2 class="text-center ">Temukan Pekerjaan Impian Anda</h2>
                <p class="text-center">Di Lets Job, Kami memahami bahwa menemukan pekerjaan yang tepat bisa menjadi tantangan
                    proses. Itulah mengapa kami telah mengembangkan serangkaian alat dan fitur canggih untuk membuat pencarian pekerjaan Anda
                    lebih mudah, lebih cepat, dan lebih efisien.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="text-align: center;">
                <img class="rounded mb-2" src="./img/readiness_17227417.png" alt="Generic placeholder image" width="140"
                    height="140">
                <h2 class="text-center">Proses yang Mudah</h2>
                <p class="text-center">Melamar pekerjaan seharusnya tidak menjadi proses yang memakan waktu dan rumit. Kami telah
                    Merevolusi pengalaman aplikasi untuk membuatnya lebih mudah dan lebih efisien. Temukan bagaimana pekerjaan kami
                    Portal aplikasi menyederhanakan proses aplikasi, memberi Anda lebih banyak waktu untuk fokus pada hal yang penting
                    – mendapatkan pekerjaan impian Anda.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="text-align: center;">
                <img class="rounded mb-2" src="./img/encrypted_2592317.png" alt="Generic placeholder image" width="140"
                    height="140">
                <h2 class="text-center">Kepercayaan dan Keamanan</h2>
                <p class="text-center">Kami memahami bahwa kepercayaan dan keamanan Anda sangat penting saat menggunakan
                    portal lamaran kerja. Kami mengambil tanggung jawab ini dengan serius dan telah menerapkan langkah-langkah yang kuat
                    untuk memastikan lingkungan yang aman dan terjamin untuk pencarian kerja Anda.</p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <div class="row featurette my-3 pt-5">
            <div class="col-md-7 d-flex align-items-center justify-content-cente">
                <div>
                    <h2 class="featurette-heading">Latar Belakang : <span class="text-muted">Didorong oleh semangat dan
                    Tujuan.</span></h2>
                    <p class="lead"> Lets Job lahir dari hasrat untuk menghubungkan individu berbakat dengan
                        Peluang karir yang mengubah hidup. Pendiri kami mengalami tantangan dalam mencari pekerjaan
                        secara langsung dan membayangkan platform yang dapat merevolusi proses, membuatnya lebih
                        efisien, personal, dan bermanfaat.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    style="width: 500px; height: 500px;"
                    src="img/4151160.jpg"
                    data-holder-rendered="true">
            </div>
        </div>

        <div class="row featurette my-3">
            <div class="col-md-7 order-md-2  d-flex align-items-center justify-content-cente">
                <div>
                    <h2 class="featurette-heading">Visi Kami : <span class="text-muted">Membentuk Masa Depan
                    Kerja.</span></h2>
                    <p class="lead">Kami membayangkan masa depan di mana menemukan pekerjaan yang sempurna adalah hal yang mulus dan memberdayakan
                        pengalaman untuk semua orang. Kami berkomitmen untuk memanfaatkan teknologi dan inovasi untuk membentuk kembali
                        cara orang mendekati jalur karier mereka, memberikan kesempatan yang sama dan mendorong hal positif
                        perubahan di dunia kerja.</p>
                </div>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    src="img/6221508.jpg"
                    data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
        </div>

        <div class="row featurette my-3">
            <div class="col-md-7 d-flex align-items-center justify-content-cente">
                <div>
                    <h2 class="featurette-heading">Kualitas Kami : <span class="text-muted">Transparansi, inklusivitas, dan
                    Integritas</span></h2>
                    <p class="lead">Kami menjunjung tinggi standar transparansi, inklusivitas, dan integritas tertinggi. Kami
                        percaya dalam membina lingkungan di mana keragaman dirayakan, dan semua individu
                        diperlakukan dengan adil dan hormat. Komitmen kami terhadap praktik etis memastikan tepercaya dan
                        Platform yang andal untuk pencari kerja dan pemberi kerja.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    src="img/4191118.jpg"
                    data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
        </div>

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- footer  -->
    <footer class="bg-white p-4 text-muted ">
        <div class="container">
        <button id="modeToggle" class="btn btn-outline-secondary mt-3">Mode Malam</button>

            <!-- action -->
            <hr />
            <div class="d-flex flex-column align-items-center justify-content-cente mt-3">
                <!--quick link-->
                <p class="mb-0 fs-7 ">
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
                </p>
                <!--copyrights-->
                <div class="d-flex">
                    <a class=" " href="#"><img src="img/lets_job-removebg-preview.png" width="50px" height="40px" alt="Lets Job"
                            class="mb-2" /></a>
                    <p class="fs-7">&copy; 2024</p>
                    <script src="script.js"></script>
                </div>
            </div>
        </div>
    </footer>


    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
        const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
    </script>

</html>