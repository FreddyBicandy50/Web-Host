<!DOCTYPE html>
<html>

<head>
   <!-- Include external CSS file -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Title and Fav icon` -->
   <title>09/13/23❤️‍🔥</title>
   <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />
   <style>
      <?= include 'twinflame/style/style.css' ?>
   </style>
   <script>
      <?= include 'twinflame/js/counter.js' ?>
   </script>
   <script>
      <?= include 'twinflame/js/confetti.js' ?>
   </script>

</head>
<?php
$today = date('Y/m/d');

$confetti = '';
if ($today == '2024/04/13') $confetti = 'startConfetti()';
?>

<body <?= "onload='$confetti'" ?>>


   <!-- Inside the text-center div -->
   <div style="margin-top:0%">
      <h3 style="font-style:Arial;color:#ffffff"><b>♥ In love for ♥</b></h3>

      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="days-section"><b>0 days</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="hours-section"><b>0 hours</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="minutes-section"><b>0 minutes</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#ffffff" id="seconds-section"><b>0 seconds</b></div>
      <div style="font-family: Arial;font-size:3.5em;color:#e6395d" id="months-section"><b>0 months</b></div>

   </div>
   </div>
   <div class="text-center">

      <div align="center" style="margin-top:0%" class="heart-rate">
         <h3 style="color:#ffffff" id="main_title">
            كُولُوسِّي:<br><i>16:3-24</i>
         </h3>
         <div class="fade-in"></div>
         <div class="fade-out"></div>

      </div>
      <!-- Welcome message -->
</body>