<!-- By G A Rubayat Hyder
A17CS5335 -->
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        html {    
    background: url('../public/images/bggood.png') no-repeat center fixed;     
    background-size: cover;
    opacity: 0.93;
            }
    </style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Something Good</title>

    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <div class="complete_gbox">

        <div class="feel_head"><h1>Say Something Good About Today</h1></div>

        <span class="feel head" style="color:red">
            <h1><?php echo $data['errorMessage'];?></h1>
        </span>

        <form action="<?php echo URLROOT; ?>/checkins/thought" method="POST" class="good_form">
        
            <input type="text" class="ip2" name="thought1" maxlength="100" placeholder="Write Something Good"/>
            <span class="feel head" style="color:red">
                <h1><?php echo $data['nullError'];?></h1>
            </span>
            
            <input type="text" class="ip2" name="thought2" maxlength="100" placeholder="Write Something Good"/>
            <span class="feel head" style="color:red">
                <h1><?php echo $data['nullError'];?></h1>
            </span>
            
            <input type="text" class="ip2" name="thought3" maxlength="100" placeholder="Write Something Good"/>
            <span class="feel head" style="color:red">
                <h1><?php echo $data['nullError'];?></h1>
            </span>
            
            <input type="text" class="ip2" name="thought4" maxlength="100" placeholder="Write Something Good"/>
            <span class="feel head" style="color:red">
                <h1><?php echo $data['nullError'];?></h1>
            </span>
            
            <input type="text" class="ip2" name="thought5" maxlength="100" placeholder="Write Something Good"/>
            <span class="feel head" style="color:red">
                <h1><?php echo $data['nullError'];?></h1>
            </span>

            <div class="good_div"><button type="submit" class="good_submit">Submit</button></div>
    
        </form>
        <div class="good_div"><a href="<?php echo URLROOT; ?>/checkins/videoJournal"><button class="good_submit">Add Video Journal</button></a></div>


    </div>



    

</body>
</html>