<!-- By G A Rubayat Hyder
A17CS5335 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html {    
    background: url('../images/reflection.png') no-repeat center fixed;     
    background-size: cover;
    opacity: 0.93;
            }

            .question{
                opacity: 1;
            }
    </style>
    <script type="text/javascript" src="../public/javascript/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thoughts History</title>
    <link rel="stylesheet" href="../public/css/style.css">

    
</head>
<body>

    <div class="header">
        <h1>Your History of Thoughts Logged</h1>
                    <h1 style="color:red;font-weight: bold;">Please note that all the data in here is completely under your control and can be deleted at any moment by you.</h1>
       
            <p><strong>The data is available for you to:</strong></p>
       
            <p><strong>1</strong>&nbsp;&nbsp; Reflect back on past thoughts that were deemed good by yourself.<br>
            <strong>2</strong>&nbsp;&nbsp; Find comfort in your own video journal.<br>
            <strong>3</strong>&nbsp;&nbsp; As a way of keeping track of your mental health.<br>


    </div>

    <div class="test">
    
        <div name="quiz" id="quiz">
            <div class="question" style="opacity:1">
                <h1><p>
                <!-- PHP Foreach loop here -->
                <?php
                foreach($data['thoughts'] as $thoughts)
                {
                    echo "Date Written: " .$thoughts->date;
                    echo "<br><br>";
                    echo "Your First Thought: " .$thoughts->thought1;
                    echo "<br>";
                    echo "Your Second Thought: " .$thoughts->thought2;
                    echo "<br>";
                    echo "Your Third Thought: " .$thoughts->thought3;
                    echo "<br>";
                    echo "Your Fourth Thought: " .$thoughts->thought4;
                    echo "<br>";
                    echo "Your Fifth Thought: " .$thoughts->thought5;
                    echo "<br><br>";
                    echo "Your Video Journal: ";
                    echo "<br>";
                    $vid = '<iframe width="1110px" height="650px" src="https://www.youtube.com/embed/'.$thoughts->vidKey.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    echo $vid;
                    echo "<br><br><br><br>";

                }
                ?>
                
                </p></h1>
            
                <form action="<?php echo URLROOT; ?>/logs/thoughtLog" method="POST">
                    <div class="good_div"><button type="submit" class="good_submit" style="background-color: red">Delete All</button></div>
                </form>
            </div>
            
            <div class="good_div"><a href="<?php echo URLROOT; ?>/pages/checkIn">><button class="good_submit">Return to Checkin Page</button></a></div>
 
        </div>
    </div>

    <!-- <p><span id="tips"></span>&nbspYou received a score of <span id="result"></span> for stress. A score of 14 is considered normal for stress. <br></p>
    <p><span id="symptoms"></span></p> -->
    
    
    
</body>
</html>