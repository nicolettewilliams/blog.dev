<?php
	$rand = rand(1,6);
?>
<html>
<head>
	<title>Roll Dice</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Poiret+One|Pacifico' rel='stylesheet' type='text/css'>

    <style type="text/css">
        body{
            font-family: 'Poiret One';
            text-align: center;
            background-color: black;
            color: rgb(160,160,160);
        }
        .wrapper{
            margin: 0 10% 0 10%;
            background-color: white;
            text-align: center;
            height: 100%;
        }
        h1{
          color: red;
          padding-top: 20px;
        }
    </style>
</head>
<body>
	<div class="wrapper">

		<h1><?= $message ?></h1>

		 <h3>Your guess is: <?php echo $guess; ?></h3>

		<h3>Correct answer is: <?php echo $rand; ?></h3>

		<form class="form">
        	<input name="guess" type='number' autofocus="autofocus">
        	<button class="btn" type="submit"><span class="submit">Submit</span></button>
     	 </form>

	</div>
</body>
</html>