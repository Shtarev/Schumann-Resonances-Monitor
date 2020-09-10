<?php
include('src/Viborkashum.php');
$Viborkashum = new Viborkashum();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <title></title>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
	<body style="background: #DCDCDC">
        <div class="container">
        <center><h4>Space Observing System of National Research <a href="http://en.tsu.ru/" target="_blank">Tomsk State University</a></h4><h2>Schumann resonances - <?= date( "d.m.Y_H.i" ) ?></h2></center>
        <img src="http://sosrff.tsu.ru/new/shm.jpg" alt="schumann_resonances" width="100%"/>
        <center><h3>Archive</h3></center>
        
        <div class="row">
            <div class="col-4"> 1
                <?php
                echo $Viborkashum->viborka();
                ?>
            </div>
            <div class="col-4"> 2
                <?php
                echo $Viborkashum->viborka();
                ?>
            </div>
            <div class="col-4"> 3
                <?php
                echo $Viborkashum->viborka();
                ?>
            </div>
        </div>
        <hr>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?step=<?=$Viborkashum->erste?>">Start</a></li>
            <li class="page-item"><a class="page-link" href="?step=<?=$Viborkashum->vzad?>">Previous</a></li>
            <li class="page-item"><a class="page-link" href="?step=<?=$Viborkashum->this_key_knop?>">This</a></li>
            <li class="page-item"><a class="page-link" href="?step=<?=$Viborkashum->pered?>">Next</a></li>
            <li class="page-item"><a class="page-link" href="?step=<?=$Viborkashum->konez?>">End</a></li>
          </ul>
        </nav>
        <hr>
        <footer>
            Copyright © 2010<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script> | Freiheitsgewährende Software | Design & programmierung by <a href="https://www.netzexplorer.com">Andrey Shtarev</a>
        </footer>
	</body>
</html>