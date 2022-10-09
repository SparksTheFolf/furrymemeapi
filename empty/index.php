<?php
$files = glob('images/*');
if ($files) {
    $FOX_NUM = count($files);

    if (!isset($_GET['i'])) {
        $random_fox_index = rand(1, $FOX_NUM);
    } else if (ctype_digit($_GET['i'])) {
        $random_fox_index = $_GET['i'];
    }
} else {
    $FOX_NUM = 0;
    $random_fox_index = 0;
}

?>

<html>
<head>
    <title>Random</title>
    <meta charset="utf-8">
</head>
<body>
<div id="panel">


	<a href="https://api.wuffs.net/?i=<?= $random_fox_index ?>" id="fox_full_link">
		<img src="https://api.wuffs.net/images/<?= $random_fox_index ?>.jpg" alt="" title="" style="visibility: hidden;" id="fox_img_link" />
	</a>
</div>

</body>
</html>