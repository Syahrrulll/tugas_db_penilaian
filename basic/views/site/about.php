<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Lembaga Akreditas';
?>

<div class="site-index" style="background-image: url('image/bg.jpg'); background-size: cover; background-position: center; height: 100vh;">

    <!-- Jumbotron Section with Gradient Overlay -->
    <div class="jumbotron text-center bg-transparent mt-5 mb-5 animated fadeIn" style="position: relative;">
        <h1 class="display-4 text-black animate__animated animate__fadeIn">Hola!!</h1>
        <p class="lead text-black animate__animated animate__fadeIn" style="animation-delay: 0.3s;">Web Simulasi Lembaga Akreditasi</p>
    </div>  

    <!-- Main Content -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Card for Data Akreditasi -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-lg animated animate__fadeInUp" style="transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 10px;">
                    <div class="card-body" style="background: linear-gradient(135deg, #ff7e5f, #feb47b); color: white; border-radius:10px;">
                        <h5 class="card-title">Data Akreditasi</h5>
                        <p class="card-text">Lihat dan kelola data akreditasi lembaga.</p>
                        <a href="./index.php?r=akreditasi" class="btn btn-lg btn-light" style="color: #ff7e5f; border-color: #ff7e5f;">
                            <i class="fas fa-check-circle"></i> Lihat Data
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card for Data Penilaian -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-lg animated animate__fadeInUp" style="transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 10px;">
                    <div class="card-body" style="background: linear-gradient(135deg, #6a11cb, #2575fc); color: white; border-radius:10px;">
                        <h5 class="card-title">Data Penilaian</h5>
                        <p class="card-text">Lihat dan kelola data penilaian lembaga.</p>
                        <a href="./index.php?r=penilaian" class="btn btn-lg btn-light" style="color: #6a11cb; border-color: #6a11cb; ">
                            <i class="fas fa-star"></i> Lihat Data
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-content"></div>
</div>

<!-- Add Font Awesome and Animate.css for better effects -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Add jQuery for additional animations and interaction -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Add hover effects to cards
    $('.card').hover(
        function() {
            $(this).css('transform', 'scale(1.05)');
            $(this).css('box-shadow', '0 4px 20px rgba(0, 0, 0, 0.2)');
        },
        function() {
            $(this).css('transform', 'scale(1)');
            $(this).css('box-shadow', '0 4px 10px rgba(0, 0, 0, 0.1)');
        }
    );
</script>
