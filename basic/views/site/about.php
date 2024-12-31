    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <body id="bg-login" style=" background-image: url('images/bg.gif'); background-repeat: no-repeat; background-position: center; display: fixed; background-size: cover;">
    <div class="site-about" style="position: relative;">

        <div class="silkscreen-regular">
            <div class="watermark">
                <p style="font-size: 78px;">KELOMPOK VARCHAR</p>
                <ul>
                    <a href="#popup" class="btn">Start</a>
                    <li><a href="index.php">Exit</a></li>
                </ul>
            </div>

            <div class="popup" id="popup">
                <a href="#" class="popup__overlay"></a>
                <div class="popup__content">
                    <div class="popup__header">
                        <h1>Dibuat Oleh:</h1>
                        <h3>Syahrul</h3>
                        <h3>Parres</h3>
                        <h3>Rahma</h3>
                        <h3>Yasmine</h3>
                    </div>
                    <a href="#" class="popup__close">Close</a>
                </div>
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
            top: 300px;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            color: rgb(255, 255, 255);
            font-size: 24px;
            text-align: center;
            width: 100%;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .watermark p {
            font-size: 78px;
            font-weight: bold;
            color: white; /* Warna teks utama */
            text-shadow: 
                -7px -7px 0 black, 
                5px -7px 0 black, 
                7px -7px 0 black,
                7px 7px 0 black,
                -5px 7px 0 black,
                -7px 7px 0 black,
                7px 5px 0 black;
        }


        .watermark a {
            color: white; /* Change link color to white (or any desired color) */
            text-decoration: none; /* Remove the underline */
            font-size: 20px; /* Ensure consistent font size */
        }

        .watermark a:hover {
            color: #FFD700; /* Change color on hover */
            text-decoration: none; /* Ensure no underline on hover */
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

        .watermark a:hover {
            color: #FFD700;
        }
        
        .watermark ul li {
            text-decoration: none;
            color: white;
            margin: 0;
            font-size: 15px;
            left: 50%;
        }

        .popup__close {
            color: white;
            text-decoration: none;
            font-size: 15px;
            display: block; /* Make it a block element */
            text-align: center; /* Center the text within its block */
            margin-top: 20px; /* Add some spacing from the content above */
        }

        .popup__close:hover {
            color: #FFD700;
        }

        .popup{
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            top: 0;
            left: 0;

            opacity: 0;
            visibility: hidden;
            z-index: 10000;

            transition: all .3s;
        }

        .popup__content {
            width: 50%;
            background-color: black;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.9);

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.25);
            opacity: 0;
            z-index: 10001;

            transition: all .5s .1s;
        }

        .popup__overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent; /* Ensure the background doesn't obscure the content */
            z-index: 10000; /* Same z-index as the .popup container */
        }

        .popup__header {
            text-align: center;
            text-transform: uppercase;
            color: white;
            margin-bottom: 36px;
        }

        .popup__header h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .popup__header h3 {
            font-size: 20px;
        }

        #popup:target {
            opacity: 1;
            visibility: visible;
        }

        #popup:target ~ .page-content {
            pointer-events: none;
            opacity: 0.5;
        }


        #popup:target .popup__content {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    </style>