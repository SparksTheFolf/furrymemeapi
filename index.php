<?php


    $FOX_NUM = 14;
    $random_fox_index = rand(1, $FOX_NUM);



?>

<html>
<head>
    <title>FURYYYY</title>
    <meta charset="utf-8">
    <meta type="author" content="xinitrc" />
    <meta type="description" content="Displaying pictures of random foxes with every click!" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#FF6600" />
	<meta http-equiv="Cache-Control" content="max-age=1" />

    <meta property="og:image" content="https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/<?= $random_fox_index ?>.jpg" />
    <meta property="og:title" content="api.wuffs.net" />
    <meta property="og:description" content="New furry meme :)" />
    <meta property="og:url" content="https://api.wuffs.net" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script>
        $(document).ready(function () {
            var panel_width = document.getElementById('sidebar').offsetWidth;
            var image_width = document.getElementById('fox_full_link').offsetWidth;
            document.getElementById('footer').style.width = panel_width + image_width;
        });
    </script>

    <style type="text/css">
        body {
            margin: 0;
			padding: 5px;
            font-family: arial, verdana, tahoma, sans-serif;
            font-size: 14px;
        }
        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 75%;
            text-align: center;
        }
		#panel {
			display: flex;
			align-items: center;
			max-height: 100%;
		}
        #sidebar {
            float: left;
            width: 200px;
            padding: 5px;
        }
		#fox_full_link {
			max-width: calc(100% - 240px);
			max-height: 100%;
            background: transparent url("https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/<?= $random_fox_index ?>.jpg") 0 0/contain no-repeat);
			margin: 10px;
		}
        #fox_img_link {
            float: left;
            margin: 10px;
			max-width: 100%;
            border: 2px solid #ccc;
        }
    </style>
</head>
<body>
<iframe src= 'https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/<?= $random_fox_index ?>.jpg' title="description"></iframe>
<div id="panel">
	<div id="sidebar">
		<label for=shareButton><strong>Share this meme!</strong></label>
		<input type="text" id="shareButton" value="https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/<?= $random_fox_index ?>.jpg" onclick="this.select();" /><br />

		<p id="fox_count">Memes Counter: <?= $FOX_NUM ?><br />
			<a href="https://github.com/SparksTheFolf/furrymemeapi">Add more memes!</a></p>

            
		<br /><br /><br />
		<p>API is Available: <a href="https://api.wuffs.net/api/v2/getmemes/">https://api.wuffs.net/api/v2/getmemes/</a></p>


	</div>

	<a href="https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/<?= $random_fox_index ?>.jpg" id="fox_full_link">
		<img src="https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/<?= $random_fox_index?>.jpg" alt="" title="" style="visibility: hidden;" id="fox_img_link" />
	</a>

    <div id="footer">
        <p>-SparksTheFolf</p>
    </div>
</div>

</body>
</html>