    <?php

    /** @var yii\web\View $this */

    use yii\helpers\Html;

    $this->title = 'About';
    $this->params['breadcrumbs'][] = $this->title;
    ?>


    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">

    <div class="site-about" style="position: relative;">

        <div class="silkscreen-regular">
            <div class="watermark">
                <p>Dipersembahkan oleh Kelompok Varchar</p>
                <ul>
                    <li>Syahrul</li>
                    <li>Rahma</li>
                    <li>Parres</li>
                    <li>Yasmine</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Watermark CSS -->
    <style>
        .site-about {
            position: relative;
        }

        .watermark {

            border-radius: 10px;
            position: absolute;
            top: 250px;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            color: rgb(0, 0, 0);
            font-size: 24px;
            text-align: center;
            width: 100%;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .watermark p {
            margin: 0;
            font-weight: bold;
        }

        .watermark ul {
            list-style: none;
            padding: 0;
        }

        .silkscreen-regular {
        font-family: "Silkscreen", serif;  
        font-weight: 400;
        font-style: normal;
        }


        .watermark ul li {
            margin: 0;
            font-size: 20px;
        }
    </style>
