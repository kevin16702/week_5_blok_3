<?php
$date = date("j F Y");
  $page;
  $id = $_GET["id"];
  if ($id >0 && $id <5){
      $page = "./pages/" . $id . ".php";
  } else{
    $page = "./pages/1.php";  
  }

  ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link href="./stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>

  <?php include 'includes/header.php'; ?>

  <?php
  include $page;
  ?>
	
  <?php include 'includes/footer.php'; ?>

</body>
</html>


















<script type="text/javascript">
    function Dropdownmenu1() {
  document.getElementById("dropdown1").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('#menu1')) {
    var dropdowns2 = document.getElementsByClassName("dd-content");
    var e;
    for (e = 0; e < dropdowns2.length; e++) {
      var openDropdown2 = dropdowns2[e];
      if (openDropdown2.classList.contains('show')) {
        openDropdown2.classList.remove('show');
      }
    }
  }
} 

document.getElementById('footer').innerHTML = "    Kevin Bouwmeester © <?php echo $date; ?>"
</script>