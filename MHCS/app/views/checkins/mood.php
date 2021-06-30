<!-- By G A Rubayat Hyder
A17CS5335 -->
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        html {    
    background: url('../public/images/bgfeelings.jpg') no-repeat center fixed;     
    background-size: cover;
            }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Feeling?</title>
</head>


<body>

    
    <form action="<?php echo URLROOT; ?>/checkins/mood" method="POST">
    <div class="complete_gbox">

        <div class="feel_head"><h1>How Are You Feeling Today?</h1></div>
        <span class="feel head" style="color:red">
            <h1><?php echo $data['errorMessage'];?></h1>
        </span>
        <ul class="gboxsection">

            <li>
            <button class="gbox gbox-img-1 gbox-info" name="mood" value="0" style="position: relative;" type="submit">
                        <h3>Depressed</h3>
                        <br>
                        <p>There's always help, just need to ask.</p>
            </button>
            </li>

            <li>
            <button class="gbox gbox-img-2 gbox-info" name="mood" value="1" style="position: relative;" type="submit">
                        <h3>Sad</h3>
                        <br>
                        <p>It's ok to be sad sometimes. Is there something we can do?</p>
            </button>
            </li>

            <li>
            <button class="gbox gbox-img-3 gbox-info" name="mood" value="2" style="position: relative;" type="submit">
                        <h3>Anxious</h3>
                        <br>
                        <p>Take a few deep breaths, and let's overcome this together.</p>
            </button>
            </li>

            <li>
                <button class="gbox gbox-img-4 gbox-info" name="mood" value="3" style="position: relative;" type="submit">
                    <h3>Stressed</h3>
                        <br>
                        <p>It's ok to take a break sometimes. Why not watch a movie.</p>
                </button>
            </li>

            <li>
            <button class="gbox gbox-img-5 gbox-info" name="mood" value="4" style="position: relative;" type="submit">
                        <h3>Unsure</h3>
                        <br>
                        <p>Sometimes my feelings confuse me as well.</p>
            </button>
            </li>

            <li>
            <button class="gbox gbox-img-6 gbox-info" name="mood" value="5" style="position: relative;" type="submit">
                        <h3>Happy</h3>
                        <br>
                        <p>If you're happy and you know it</p>
            </button>
            </li>

            <li>
            <button class="gbox gbox-img-7 gbox-info" name="mood" value="6" style="position: relative;" type="submit">
                        <h3>Excited</h3>
                        <br>
                        <p>Yay!!! What's the occasion?</p>
            </button>
            </li>
            <li>
            <button class="gbox gbox-img-8 gbox-info" name="mood" value="7" style="position: relative;" type="submit">
                        <h3>Euphoric.</h3>
                        <br>
                        <p>Nuff said.</p>
            </button>
            </li>
        </ul>
    </div>
    </form>









</body>
</html>