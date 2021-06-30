<!-- By G A Rubayat Hyder
A17CS5335 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html {    
    background: url('../images/moodlogbg.png') no-repeat center fixed;     
    background-size: cover;
    opacity: 0.93;
            }
    </style>
    <script type="text/javascript" src="../public/javascript/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Test Result</title>
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Scripts and Stylesheet for morris.js -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    
</head>
<body>

    <div class="header">
    <h1>Your History of Moods Logged</h1>
                    <h1 style="color:red;font-weight: bold;">Please note that all the data in here is completely under your control and can be deleted at any moment by you.</h1>
       
            <p><strong>The data is available for you to:</strong></p>
       
            <p><strong>1</strong>&nbsp;&nbsp; Reflect back on past days that were deemed good by yourself.<br>
            <strong>2</strong>&nbsp;&nbsp; Realize when it's time to ask for help.<br>
            <strong>3</strong>&nbsp;&nbsp; As a way of keeping track of your mental health.<br>
    </div>

    <div class="test">
    
        <div name="quiz" id="quiz">
            <div class="question">
                
                <!-- Morris.js Chart Here -->
                <!-- <div id="chart" style="width:900px" style="height:250px"></div> -->
                <div id="chart" style="height: 250px;"></div>
            
                <form action="<?php echo URLROOT; ?>/logs/moodLog" method="POST">
                    <div class="good_div"><button type="submit" class="good_submit" style="background-color: red">Delete All</button></div>
                </form>
            </div>
            
            <div class="good_div"><a href="<?php echo URLROOT; ?>/pages/checkIn"><button class="good_submit">Return to Checkin Page</button></a></div>
 
        </div>
    </div>

    <!-- <p><span id="tips"></span>&nbspYou received a score of <span id="result"></span> for stress. A score of 14 is considered normal for stress. <br></p>
    <p><span id="symptoms"></span></p> -->
    
    
    
</body>
</html>

<script>

const dat = '<?php echo $data; ?>'

console.log(dat);

const chartRawDat = JSON.parse(dat);
const chartDat = chartRawDat.moods.map(data=>{
return {
year : data.date,
value: data.mood
}
})

console.log(chartDat);

new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'chart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    ...chartDat
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Mood']
});




</script>