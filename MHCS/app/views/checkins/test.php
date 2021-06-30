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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Test</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <script type="text/javascript" src="../public/javascript/script.js"></script>
</head>
<body>

    

    <div class="header">
        <h1>Take the Stress Test</h1>
                    <p>Please read each statement and select a number 0, 1, 2 or 3 that indicates how much the statement applied to you over the past week. There are no right or wrong answers. Do not spend too much time on any statement.</p>
                    <h1 style="color:red;font-weight: bold;">Please note: This test should only be completed with your health practitioner.</h1>
       
            <p><strong>The rating scale is as follows:</strong></p>
       
            <p><strong>0</strong>&nbsp;&nbsp; Did not apply to me at all<br>
            <strong>1</strong>&nbsp;&nbsp; Applied to me to some degree, or some of the time<br>
            <strong>2</strong>&nbsp;&nbsp; Applied to me to a considerable degree, or a good part of time<br>
            <strong>3</strong>&nbsp;&nbsp; Applied to me very much, or most of the time</p>
    </div>

    <div class="test">
        <form name="quiz" id="quiz" action="<?php echo URLROOT; ?>/checkins/result" method="GET">
            <div class="question">
                <h1>I found myself getting upset by quite trivial things</h1>
                
                    <input id="stress11" name="stress1" type="radio" value="0">0: I never get upset over trivial things<br>
                    <input id="stress12" name="stress1" type="radio" value="1">1: I somethimes get upset over trivial things<br>
                    <input id="stress13" name="stress1" type="radio" value="2">2: I get upset over trivial things quite a lot <br>
                    <input id="stress14" name="stress1" type="radio" value="3">3: I always get upset over trivial things <br>

            </div>
            <div class="question">
                <h1>I tended to over-react to situations</h1>
                
                    <input id="stress21" name="stress2" type="radio" value="0">0: I never over-react to situations <br>
                    <input id="stress22" name="stress2" type="radio" value="1">1: I sometimes over-react to situations <br>
                    <input id="stress23" name="stress2" type="radio" value="2">2: I quite often over-react to situations<br>
                    <input id="stress24" name="stress2" type="radio" value="3">3: I always over-react to situations<br>

            </div>
            <div class="question">
                <h1>I found it difficult to relax</h1>
                
                    <input id="stress31" name="stress3" type="radio" value="0">0: I never find it hard to relax <br>
                    <input id="stress32" name="stress3" type="radio" value="1">1: I sometimes find it hard to relax <br>
                    <input id="stress33" name="stress3" type="radio" value="2">2: I quite often find it hard to relax <br>
                    <input id="stress34" name="stress3" type="radio" value="3">3: It is near impossible forme to relax <br>

            </div>
            <div class="question">
                <h1>I found myself getting upset rather easily</h1>
                
                    <input id="stress41" name="stress4" type="radio" value="0">0: I never find myself getting upset <br>
                    <input id="stress42" name="stress4" type="radio" value="1">1: I sometimes find myself getting upset <br>
                    <input id="stress43" name="stress4" type="radio" value="2">2: I find myself getting upset quite often<br>
                    <input id="stress44" name="stress4" type="radio" value="3">3: I always seem to be upset over something or other <br>

            </div>
            <div class="question">
                <h1>I felt that I was using a lot of nervous energy</h1>
                
                    <input id="stress51" name="stress5" type="radio" value="0">0: I find myself relaxed in all situations <br>
                    <input id="stress52" name="stress5" type="radio" value="1">1: I seem to use some nervous energy in rare occasions <br>
                    <input id="stress53" name="stress5" type="radio" value="2">2: I seem to be expending quite some nervous energy in most occasions <br>
                    <input id="stress54" name="stress5" type="radio" value="3">3: I always seem to be using a lot of nervous energy regardless of the occasion <br>

            </div>
            <div class="question">
                <h1>I found myself getting impatient when I was delayed in any way (eg, lifts, traffic lights, being kept waiting)</h1>
                
                    <input id="stress61" name="stress6" type="radio" value="0">0: I am completely ok with being delayed <br>
                    <input id="stress62" name="stress6" type="radio" value="1">1: I am somewhat impatient if delayed <br>
                    <input id="stress63" name="stress6" type="radio" value="2">2: I start getting jittery and impatient when delayed <br>
                    <input id="stress64" name="stress6" type="radio" value="3">3: I get copletely imapatient and filled with negative energy when delayed <br>

            </div>
            <div class="question">
                <h1>I felt that I was rather touchy</h1>
                
                    <input id="stress71" name="stress7" type="radio" value="0">0: I am never oversensitive to an issue <br>
                    <input id="stress72" name="stress7" type="radio" value="1">1: I get touchy to only certain issues <br>
                    <input id="stress73" name="stress7" type="radio" value="2">2: I get touchy more often than not <br>
                    <input id="stress74" name="stress7" type="radio" value="3">3: I always seem to be touchy no matter the topic <br>

            </div>
            <div class="question">
                <h1>I found it hard to wind down</h1>
                
                    <input id="stress81" name="stress8" type="radio" value="0">0: I never have trouble winding down <br>
                    <input id="stress82" name="stress8" type="radio" value="1">1: I always have trouble winding down <br>
                    <input id="stress83" name="stress8" type="radio" value="2">2: I seem to have trouble winding down most of the time <br>
                    <input id="stress84" name="stress8" type="radio" value="3">3: I never seem to be able to wind down<br>

            </div>
            <div class="question">
                <h1>I found that I was irritable</h1>
                
                    <input id="stress91" name="stress9" type="radio" value="0">0: I find myself hard to irritate no matter the situation <br>
                    <input id="stress92" name="stress9" type="radio" value="1">1: I find that I do infact get irritated in certain scenarios <br>
                    <input id="stress93" name="stress9" type="radio" value="2">2: I find myself getting irritated at simple things <br>
                    <input id="stress94" name="stress9" type="radio" value="3">3: I always seem to be irritated, regardless of the scenario <br>

            </div>
            <div class="question">
                <h1>I found it hard to calm down after something upset me</h1>
                
                    <input id="stress101" name="stress10" type="radio" value="0">0: I find it rather easy to resolve things that upset me <br>
                    <input id="stress102" name="stress10" type="radio" value="1">1: I find it somewhat difficult to get over things that upset me<br>
                    <input id="stress103" name="stress10" type="radio" value="2">2: It seems that I take a long time to get over things that upset me <br>
                    <input id="stress104" name="stress10" type="radio" value="3">3: I find it near impossible to let go of the things that upset me <br>

            </div>
            <div class="question">
                <h1>I found it difficult to tolerate interruptions to what I was doing</h1>
                
                    <input id="stress111" name="stress11" type="radio" value="0">0: I am quite tolerent to to interruptions<br>
                    <input id="stress112" name="stress11" type="radio" value="1">1: I get annoyed by interruptions but accept it rather quickly <br>
                    <input id="stress113" name="stress11" type="radio" value="2">2: I get angry when interrupted while I am working <br>
                    <input id="stress114" name="stress11" type="radio" value="3">3: I sometimes lash out when interrupted while I am working <br>

            </div>
            <div class="question">
                <h1>I was in a state of nervous tension</h1>
                
                    <input id="stress121" name="stress12" type="radio" value="0">0: I am usually never tensed <br>
                    <input id="stress122" name="stress12" type="radio" value="1">1: I am tensed now and again, but nothing I don't usually get over <br>
                    <input id="stress123" name="stress12" type="radio" value="2">2: I always seem to be slightly tensed about something or other<br>
                    <input id="stress124" name="stress12" type="radio" value="3">3: I always seem to be vary tensed and most of the time I don't even know why <br>

            </div>
            <div class="question">
                <h1>I was intolerant of anything that kept me from getting on with what I was doing</h1>
                
                    <input id="stress131" name="stress13" type="radio" value="0">0: I am completely flexible with what I do, so it doesn't bother me<br>
                    <input id="stress132" name="stress13" type="radio" value="1">1: I don't usually allow any interruption unless it's an emergency<br>
                    <input id="stress133" name="stress13" type="radio" value="2">2: I get very irritated and angry when interrupted <br>
                    <input id="stress134" name="stress13" type="radio" value="3">3: I don't want to be interrupted during my work at all, I might lash out in certain cases.<br>

            </div>
            <div class="question">
                <h1>I found myself getting agitated</h1>
                
                    <input id="stress141" name="stress14" type="radio" value="0">0: I don't usually get aggitated over almost anything <br>
                    <input id="stress142" name="stress14" type="radio" value="1">1: I sometimes get aggitated depending on the situation <br>
                    <input id="stress143" name="stress14" type="radio" value="2">2: I seem to feel agitated more often than not nowadays <br>
                    <input id="stress144" name="stress14" type="radio" value="3">3: I always seem to be aggitated regardles of the situation <br>

            </div>

            <div class="good_div"><button type="submit" class="good_submit" onclick="onSubmit()">Submit</button></div>
        </form>
    </div>
    
</body>
</html>