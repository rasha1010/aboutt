<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta http-equiv="Content-Security-Policy"
    content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap: content:">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">

  <meta name="theme-color" content="#212121">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">
  <title>iKURD0</title>

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="apple-touch-icon" href="assets/icons/ikurd.svg">
  <link rel="icon" href="assets/icons/ikurd.svg">
  <link rel="manifest" href="/manifest.json">

  <link rel="stylesheet" href="framework7/framework7-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body class="noselect">

  <!-- navbar -->
  <!-- navbar -->
  <!-- navbar -->
  <!-- navbar -->
  <!-- navbar -->
  <!-- navbar -->

  <nav class="navbar navbar-dark bg-light m-3 mb-4 br-5 shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="assets/img/ikurd.svg" alt="" width="50" height="50">
      </a>
      <a class="navbar-brand" href="/">
        <img src="assets/icons/icons8-box.svg" alt="" width="40" height="40">
      </a>
    </div>
  </nav>

  <!-- source -->
  <!-- source -->
  <!-- source -->
  <!-- source -->
  <!-- source -->
  <!-- source -->

    <div class="t-color bg-blue-tow p-3 m-3 br-5">
      <h1 style="margin-bottom: 0px;">iKURD</h1>
      <a class="t-color box text-decoration-none float-end" style="
    margin-top: -33px;
" href="/"> سۆرس</a>
    </div>

  <!-- post -->
  <!-- post -->
  <!-- post -->
  <!-- post -->
  <!-- post -->
  <!-- post -->

  <?php
$string = file_get_contents("json/all.json");
$json = json_decode($string, true);
foreach ($json as $app => $appkey){
?>

  <nav class=" bg-light p-2 m-3 br-5">
    <div>
      <p cass="float-start fw-bold" style="margin-bottom: -25px; margin-top:4px; margin-left: 62px;">
        <?php echo $appkey['name'] ?></p>
      <img class="br-15 border" src="<?php echo $appkey['img'] ?>" alt="" width="50" height="50"
        style="margin-left: 5px;">
      <a class="float-end button-dawn t-color text-decoration-none" style="margin-top: 8px;margin-right: 5px;"
        onclick="location='<?php echo $appkey['url'] ?>'">GET</a>
      <p class="text-monospace text-bt"><?php echo $appkey['note'] ?></p>
    </div>
  </nav>
  <?php
}
?>

  <!-- header -->
  <!-- header -->
  <!-- header -->
  <!-- header -->
  <!-- header -->

  <!-- header -->
  <!-- header -->
  <!-- header -->
  <!-- header -->
  <!-- header -->

  <nav class="bg-light p-2 mt-x mt-4 brr-5">
    <div>
      <p class="text-center m-2">power by <a class="text-decoration-none fw-bold" href="/">iKURD</a></p>
    </div>
  </nav>

  <!-- Framework7 library -->
  <script src="framework7/framework7-bundle.min.js"></script>


  <!-- App routes -->
  <script src="js/routes.js"></script>
  <!-- App store -->
  <script src="js/store.js"></script>
  <!-- App scripts -->
  <script src="js/app.js"></script>
</body>

</html>