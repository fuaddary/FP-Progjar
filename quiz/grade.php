<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>NETWORK PROGRAMMING QUIZ RESULTS</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>

<body>

	<div id="page-wrap">

		<h1 class="transparent index-headline" >Here&#8217;s What Metal Band You Are</h1>
		
        <?php
        
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
           
            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

            ?>

            <div class="results-overlay">

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                  echo '<div class="quiz-overlay result priest"></div><div class="results-text"><p class="you-chose">You Scored:</p><img src="../imgs/priest.jpg" alt="Judas Priest" class="results-img" /><div class="results test-results2"><p class="score">Judas Priest</p><p class="score-details">Judas Priest brought heavy metal to a new level with the twin guitars of Glen Tipton and KK Downing and vocals of Rob Halford. Songs you should listen to: Sinner, Victim of Changes, The Ripper, Beyond The Realms of Death, Delivering The Goods, Breaking The Law, Solar Angels, The Sentinel, Painkiller, Nightcrawler, Burn In Hell, Hellrider, Judas Rising.</p><a id="replay" class="take-quiz-btn" href="/test.php">Play Again?</a></div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                  echo '<div class="quiz-overlay result megadeth"></div><div class="results-text"><p class="you-chose">You Scored:</p><img src="../imgs/megadeth.jpg" alt="Megadeth" class="results-img" /><div class="results test-results2"><p class="score">Megadeth</p><p class="score-details">After getting tossed from Metallica, guitarist/singer Dave Mustaine formed Megadeth with bassist Dave Ellefson, one of the iconic thrash metal bands. Songs to check out: Peace Sells (But Who&#8217;s Buying), In My Darkest Hour, Holy Wars, Hangar 18, Tornado Of Souls, High Speed Dirt, Sweating Bullets, Angry Again, Trust, Kill The King.</p><a id="replay" class="take-quiz-btn" href="/test.php">Play Again?</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                  echo '<div class="quiz-overlay result maiden"></div><div class="results-text"><p class="you-chose">You Scored:</p><img src="../imgs/maiden.jpg" alt="Iron Maiden" class="results-img" /><div class="results test-results2"><p class="score">Iron Maiden</p><p class="score-details">Iron Maiden was one of the first bands to play with extreme speed and precision, and were forerunners of speed and thrash metal. Their mascot, Eddie, is another part of their appeal. Be aure to check out these songs: Running Free, Number of the Beast, The Prisoner, Run To The Hills, The Trooper, 2 Minutes To Midnight, Deja Vu, Fear Of The Dark.<p></p><a id="replay" class="take-quiz-btn" href="/test.php">Play Again</a></div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
                  echo '<div class="quiz-overlay result dio"></div><div class="results-text"><p class="you-chose">You Scored:</p><img src="../imgs/rjd.jpg" alt="Ronnie James Dio" class="results-img" /><div class="results test-results2"><p class="score">Ronnie James Dio</p><p class="score-details">Ronnie James Dio possessed one of the most powerful voices in rock history. He sang for Rainbow and Black Sabbath before forming his own band, Dio. Noteworthy songs to check out include: Heaven and Hell, Neon Nights, The Mob Rules, Holy Diver, Rainbow in The Dark, Don&#8217;t Talk To Strangers, The Last In Line, I, The Devil Cried.</p><a id="replay" class="take-quiz-btn" href="test.php">Play Again</a></div>';
            }
            
        ?>     
                </div>
            </div>
                
	</div>
	
</body>
</html>
