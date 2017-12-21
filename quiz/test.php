<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>NETWORK PROGRAMMING QUIZ</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>


</head>

<body>

	<div id="page-wrap">

		<!-- <h1 class="transparent index-headline">Lockedown Design: What Metal Band Are You?</h1> -->
		
		<form action="grade.php" method="post" id="quiz">
		
		<?php
		/**
	         * Each <li> holds a question. Follow the same pattern if you want to add more questions.
	         * If you add more questions, be sure to add more $answer variables in grade.php 
	         * (See lines 26-30 in grade.php).
	         * The important values here: name value on the rasio buttons for each answer, .fwrd class on labels.
	         * You need the name value to store answers for grading.
	         * In this demo, the frwd class controls question advancement through jQuery.
	         */
            ?>    
            <ul id="test-questions">
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Apa yang dimaksud dengan FTP?</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">a.  Fedora Transfer Protocol.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">b.  File Transaction Protocol.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">c.  File Transfer Protocol.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">d.  Free Transfer Protocol.</label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Apa yang dimaksud dengan SMTP?</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">a.  Simple Memory Transfer Protocol.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">b.  Shared Mail Transfer Protocol.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">c.  Simple Mail Transfer Protocol.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">d.  Simple Mail Transaction Protocol.</label>
                    </div>
                    <p class="quiz-progress">2 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Karakteristik dari Client-Server, kecuali ... </h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">a.  Menyediakan layanan terpisah yang berbeda.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">b.  Server dapat melayani beberapa client pada saat yang sama dan mengatur pengaksesan resource.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">c.  Antara client dan server merupakan hubungan one-to-many.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">d.  Antara client dan server merupakan hubungan many-to-one.</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Yang bukan merupakan lapisan transport pada jaringan adalah . . .</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">a.  TCP.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">b.  UDP.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">c.  FTP.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">d.  Programming Interface (socket).</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Yang bukan merupakan pernyataan yang benar mengenai FTP Server adalah . . .</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">a.  FTP menggunakan protocol Transmission Control Protocol (TCP).</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">b.  Transmission Control Protocol (TCP) untuk komunikasi data antara klien dan server.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">c.  FTP menggunakan protocol IP.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">d.  Antara Klien dan Server akan dibuatkan sebuah sesi komunikasi sebelum transfer  data dimulai.</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
		
		</form>
            <!-- <div class="nomargin">
	           <div class="share lb"><a href="http://www.facebook.com/sharer.php?u=http://www.metalquiz.sacramentowebdesigns.com/&amp;p%5bsummary%5d=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out." title="Share on Facebook" target="_blank"><img src="../imgs/fb.png" alt="Share this on Facebook" /></a></div>
               <div class="share rb"><a href="http://twitter.com/home/?status=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out.%20(http://www.metalquiz.sacramentowebdesigns.com)%20+via+@Lockedown_" title="Share on Twitter" target="_blank"><img src="../imgs/tw.png" alt="Share this on Twitter" /></a></div>
               <p class="shareprompt">Share This Quiz</p>
               <p class="designby shadow1"><span>Built by </span><a href="https://www.lockedowndesign.com"><img src="../imgs/ld.png" alt="Micro Website by Lockedown Design" /></a></p>
            </div> -->
    </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
	<?php
	/**
         * This quiz uses jQuery to move the questions up each time you click an answer.
         * You can change the layout of the quiz, but you may need to adjust the $mt variable.
         * The $mt variable is the margin-top of the quiz.
         * This gives the illusion of each question being on a separate page.
         * It is actually one page, just this element moves.
         * Quiz-takers need to get to the end and hit the Submt button to see results.
         * The answers get stored and sent to grade.php for evaluation.
         * 
         */
        ?>
    <!-- <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
     --><script>
        
        var $mt = 0;
        window.onload = function timeout(){

                setTimeout(function(){
                    $mt = $mt - 500;
                    $("#test-questions").css("margin-top", $mt); 
                    timeout();
                },5000);
        };
    </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-00000000-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
