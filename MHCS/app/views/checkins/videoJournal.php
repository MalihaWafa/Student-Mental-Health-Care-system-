<!-- By G A Rubayat Hyder
A17CS5335 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html {    
    background: url('../images/videojournal.png') no-repeat center fixed;     
    background-size: cover;
    opacity: 0.93;
            }
    </style>
    <script type="text/javascript" src="../public/javascript/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Test Result</title>
    <link rel="stylesheet" href="../public/css/style.css">

    
</head>
<body>

    <div class="header">
        <h1>A picture is worth a thousand words, a video is worth a thousand pictures.</h1>
                    <p>Please note that your video needs to be uploaded to youtube first, and then the link pasted. The video can be unlisted.</p>
                    <h1 style="color:red;font-weight: bold;">Please note: This website only accepts entry from youtube for the time being.</h1>
       
            <p><strong>The method of entry is as follows:</strong></p>
       
            <p><strong>1</strong>&nbsp;&nbsp; Upload your journal video on youtube.<br>
            <strong>2</strong>&nbsp;&nbsp; Store the journal video as unlisted.<br>
            <strong>3</strong>&nbsp;&nbsp; Copy and paste the entire link here.<br>
            <strong>4</strong>&nbsp;&nbsp; Please note: This website does not accept links from any channels.</p>
            <strong>5</strong>&nbsp;&nbsp; Therefore, this is only for your journal entries.</p>
    </div>

    <div class="test">
    
        <div name="quiz" id="quiz">
                <span class="feel head" style="color:red">
                    <h1><?php echo $data['errorMessage'];?></h1>
                </span>
            <div class="question">
                <form action="<?php echo URLROOT; ?>/checkins/videoJournal" method="POST">
                


                    <div class="good_div"><input name="video" style="width: 300px"/></div>
                    <span class="feel head" style="color:red">
                        <h1><?php echo $data['nullError'];?></h1>
                    </span>

                    <div class="good_div"><button type="submit" class="good_submit">Submit Video</button></div>
                </form>
            </div>
            
            <div class="good_div"><a href="<?php echo URLROOT; ?>/pages/checkIn">><button class="good_submit">Return to Checkin Page</button></a></div>
 
        </div>
    </div>

    <!-- <p><span id="tips"></span>&nbspYou received a score of <span id="result"></span> for stress. A score of 14 is considered normal for stress. <br></p>
    <p><span id="symptoms"></span></p> -->
    
    
    
</body>
</html>