<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Homepage</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="Home.css" />
    </head>
    <body>

        <header>
            <div class="wrapper">

                <ul class="nav-area">
                    <li><a href="homepage.php"> Home </a></li>
                    <li><a href="#"> Donor </a></li>
                    <li><a href="receivedonorinfo.php?sort_alphabet="> Receiver </a></li>
                    <li><a href="#"> Blood Bank </a></li>
                    <li><a href="#"> Logout </a></li>
                    
                </ul>
            </div>
            <div class="lottie">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/datafiles/jxW74X4pnGU6PL5/data.json"  background="transparent"  speed="1"    loop  autoplay></lottie-player>

            </div>
            <section>
                <div class="new">
                    <h1>Give</h1> <h1 style="color:#8B0000;">Blood</h1>
                        <h1>Save</h1> <h1 style="color:#8B0000;">Life</h1>
                    </h1>


                    <button class="submit-btn"><a href="#">Donate Blood</a></button><br>
                    <button class="submit-btn"><a href="receivedonorinfo.php?sort_alphabet=">Receive Blood</a></button>
                </div>
            </section>

        </header>
    </body>
</html>
