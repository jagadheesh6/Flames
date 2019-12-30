<?php include('server.php') ?>
<html lang="en">
<head>
    <link rel="shortcut icon" href="icon.ico">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find the Flames between two names using the online Flames Checker">
    <meta property="og:title" content="Flames">
    <meta property="og:url" content="officiallinks.ga">
    <meta property="og:image" content="heart.jpg">

   
    <title>Flames</title>
</head>
<body >
<h1 style="font-family: helvetica;">Flames</h1>
<div id="text">
<form method="post" action="index.php">
    <?php include('errors.php'); ?>
<input id="in1"size="25px" type="text" placeholder="Enter a Name" name="fname" value="<?php echo $fname; ?>"><br><br>
<input id="in2"size="25px"type="text" placeholder="Another Name" name="sname" value="<?php echo $sname; ?>"><br><br>
<button type="submit" id="btn" name="flame" >Check Flames</button>
</form>
</p>
</div>

   <script src="script.js"></script>
  <!-- Hotjar Tracking Code for officiallinks.ga -->
<script>
    (function (h, o, t, j, a, r) {
        h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
        h._hjSettings = { hjid: 1626337, hjsv: 6 };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script'); r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>

</body>
</html>
