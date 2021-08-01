<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home - UnitConverter</title>
  <link rel="stylesheet" href="style.css">

  <!-- Font Awesome CDN -->
  <script src="https://use.fontawesome.com/ba4bcc7fe3.js"></script>


  <!-- Google Fonts -->
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap');
  </style>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300&family=Yanone+Kaffeesatz:wght@300&display=swap');
  </style>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Georama:ital@1&display=swap');
  </style>

</head>
<body>

<header>
  <nav>
    <label class = "logo"><i class="fa fa-calculator" aria-hidden="true"></i> UnitConverter</label>
  </nav>

  <div class = "heading">
    <h1>UnitConverter</h1>
    <h2>Converting Units of Measurements</h2>
  </div>
</header>


<main>
  <div class = "form">
    <h3>Converter</h3>
    <form action = "index.php" method = "post">
      <div class = "from">
        From:
        <select name = "from">
          <option value = "celsius">Celsius</option>
          <option value = "kelvin">Kelvin</option>
          <option value = "fahrenheit">Fahrenheit</option>
        </select>
      </div>


      <div class = "to">
        To:
        <select name = "to">
          <option value = "celsius">Celsius</option>
          <option value = "kelvin">Kelvin</option>
          <option value = "fahrenheit">Fahrenheit</option>
        </select>
      </div><br>

      <div class = "input">
        Enter Number: <input type = "text" name = "inputnum">
      </div>

      <div class = "inpsubmit">
        <input type = "submit">
      </div>

    </form>

    
    <label class = "ans_text">Answer:</label>
    <div class = "ans">
    <?php
      $from = $_POST['from'];
      $to = $_POST['to'];
      $num = $_POST['inputnum'];
      $convnum = 0;

      if($from == "celsius" && $to == "kelvin"){
        $convnum = $num + 273.15;
        echo $convnum;
      }

      elseif($from == "celsius" && $to == "fahrenheit"){
        $convnum = ((9/5)*($num)) + 32;
        echo $convnum;
      }

      elseif($from == "kelvin" && $to == "celsius"){
        $convnum = $num - 273.15;
        echo $convnum;
      }

      elseif($from == "kelvin" && $to == "fahrenheit"){
        $convnum = ($num*(9/5)) - 459.67;
        echo $convnum;
      }

      elseif($from == "fahrenheit" && $to == "celsius"){
        $convnum = (($num - 32)*5)/9;
        echo $convnum;
      }

      elseif($from == "fahrenheit" && $to == "kelvin"){
        $convnum = ((($num - 32)*5)/9) + 273.15;
        echo $convnum;
      }

      else{
        echo "INVALID INPUT";
      }
    ?>
  </div>
  </div>
</main>



  
</body>
</html>