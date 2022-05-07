
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: lightblue;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: lightblue;
}

.accordion:after {
  content: '\002B';
  color: lightblue;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

<h2>Analysis</h2>
<p><strong>UPLOADED FILES AND FEEDBACK REPORTS</strong> </p>
<button class="accordion"><strong>FEEDBACK REPORTS</strong></button>
<div class="panel">
  <?php include "../error1/feeddisplay.php"; ?>
</div>

<button class="accordion"><strong>UPLOADED FILES</strong></button>
<div class="panel">
  <?php include "../fileupload/displayfile.php" ?>
</div>

<button class="accordion"><strong>ABOUT US</strong></button>
<div class="panel">
  <p><strong>ELAN International is a brilliant workplace of like minded individuals. We are trainers at heart and we instill our passion, energy and dedication to accomplish the results for our students. We work with elan and we ensure steadfast service delivery to ensure that all our students cherish their decision of being with us</strong></p>
</div>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>