<!-- By G A Rubayat Hyder
A17CS5335 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html {    
    background: url('../images/serene.png') no-repeat center fixed;     
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
        <h1>Your Result for the Stress Test</h1>
                    <p>Please note that this reslut is not in any way or form an actual medical evaluation of your mental state and should not be used as a proper judge of mental health on its own.</p>
                    <h1 style="color:red;font-weight: bold;">Please note: This test should only be completed with your health practitioner.</h1>
       
            <p><strong>The ratings available are as follows:</strong></p>
       
            <p><strong>1</strong>&nbsp;&nbsp; Extremely Severe<br>
            <strong>2</strong>&nbsp;&nbsp; Severe<br>
            <strong>3</strong>&nbsp;&nbsp; Moderate<br>
            <strong>4</strong>&nbsp;&nbsp; Mild</p>
            <strong>5</strong>&nbsp;&nbsp; Normal</p>
    </div>

    <div class="test">
        <form name="quiz" id="quiz" action="<?php echo URLROOT; ?>/pages/checkIn">
            <div class="question">
                <h1><p><span id="tips"></span>&nbspYou received a score of <span id="result"></span> for stress. A score of 14 is considered normal for stress. <br></p>
                    <p><span id="symptoms"></span></p></h1>

            </div>
            
            <div class="good_div"><button type="submit" class="good_submit">Back To Check-In</button></div>
            
        </form>
    </div>

    <!-- <p><span id="tips"></span>&nbspYou received a score of <span id="result"></span> for stress. A score of 14 is considered normal for stress. <br></p>
    <p><span id="symptoms"></span></p> -->

    
    
    <script>
        

        // const element = document.getElementById('result');
        // element.addEventListener('load', getResult)
        // getResult('result');

        document.getElementById('result').innerHTML = getResult();
        
        function getResult()
        {
            const result = localStorage.getItem('result');
            
            // const element = document.getElementById('result');
            // element.innerHTML = result;
            // console.log(result);
            // const dat;

            return result;
            
        }


        document.getElementById('tips').innerHTML = getTips();
        
        function getTips()
        {
            const result = localStorage.getItem('result');
            
            if(result >= 34)
            {

                const data = 'Your results show that you may be experiencing a <span style="color:red;font-weight: bold;">Extremely Severe</span> level of stress.';

                
                return data;

            }
            else if(result >= 26)
            {
                const data = 'Your results show that you may be experiencing a <span style="color:red;font-weight: bold;">Severe</span> level of stress.';

                return data;

            }
            else if(result >= 19)
            {

                const data = 'Your results show that you may be experiencing a <span style="color:orange;font-weight: bold;">Moderate level</span> of stress.';

                return data;

            }
            else if(result >= 14)
            {

                const data = 'Your results show that you may be experiencing a <span style="color:yellow;font-weight: bold;">Mild</span> level of stress.';

                return data;

            }
            else
            {
                
                const data = 'Your results show that you may be experiencing a <span style="color:green;font-weight: bold;">Normal</span> level of stress.';

                return data;
            }
            
        }


        document.getElementById('symptoms').innerHTML = getSymptoms();
        
        function getSymptoms()
        {
            const result = localStorage.getItem('result');
            
            if(result >= 34)
            {

                let data = '<br>This indicates that you may have been recently experiencing the majority of the characteristics displayed by high scorers on the stress scale including feeling: <br><br>';

                data += 'over-aroused, tense <br>';
                data += 'unable to relax <br>';
                data += 'touchy, easily upset <br>';
                data += 'irritable <br>';
                data += 'easily startled <br>';
                data += 'nervy, jumpy, fidgety <br>';
                data += 'intolerant of interruption or delay <br><br>';

                data += 'Your results indicate that your stress levels are currently at a Extremely Severe level. <br>';
                data += 'It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and you should seek the advice of a medical professional immediately. <br>';
                data += 'You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state. <br>';

        

                return data;

            }
            else if(result >= 26)
            {

                let data = '<br>This indicates that you may have been recently experiencing many of the characteristics displayed by high scorers on the stress scale including feeling: <br><br>';

                data += 'over-aroused, tense <br>';
                data += 'unable to relax <br>';
                data += 'touchy, easily upset <br>';
                data += 'irritable <br>';
                data += 'easily startled <br>';
                data += 'nervy, jumpy, fidgety <br>';
                data += 'intolerant of interruption or delay <br><br>';

                data += 'Your results indicate that your stress levels are currently at a Severe level.  <br>';
                data += 'It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and you should seek the advice of a medical professional immediately. <br>';
                data += 'You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state. <br>';
                 


                return data;

            }
            else if(result >= 19)
            {

                let data = '<br>This indicates that you may have been recently experiencing some of the characteristics displayed by high scorers on the stress scale including feeling: <br><br>';

                data += 'over-aroused, tense <br>';
                data += 'unable to relax <br>';
                data += 'touchy, easily upset <br>';
                data += 'irritable <br>';
                data += 'easily startled <br>';
                data += 'nervy, jumpy, fidgety <br>';
                data += 'intolerant of interruption or delay <br><br>';
        
                data += 'Your results indicate that your stress levels are currently at a Moderate level. <br>';
                data += 'It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and you should seek the advice of a medical professional immediately. <br>';
                data += 'You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state. <br>';

                return data;

            }
            else if(result >= 14)
            {

                let data = '<br>This indicates that you may have been recently experiencing a few of the characteristics displayed by high scorers on the stress scale including feeling: <br><br>';

                data += 'over-aroused, tense <br>';
                data += 'unable to relax <br>';
                data += 'touchy, easily upset <br>';
                data += 'irritable <br>';
                data += 'easily startled <br>';
                data += 'nervy, jumpy, fidgety <br>';
                data += 'intolerant of interruption or delay <br><br>';
        
                data += 'Your results indicate that your stress levels are currently at a Mild level.  <br>';
                data += 'It is suggested that you continue to monitor your stress levels and identify ways to reduce this negative emotional state. <br>';
                data += 'If you begin experiencing these emotions frequently and strongly or if you feel that you need help then you should always seek the advice of a medical professional. <br>';

                return data;

            }
            else
            {
                let data = '<br>Your results indicate that your stress levels are currently at a Normal level. <br>';
                data += 'It is suggested that you continue to monitor and be aware of the symptoms of stress and if you begin experiencing these emotions frequently and strongly you should consider seeking the advice of a medical professional. <br>';

                return data;
            }
            
        }




    </script>
    
    
    
</body>
</html>