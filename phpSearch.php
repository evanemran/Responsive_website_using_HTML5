<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name = "viweport" content = "width = device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content = "Welcome To The Biggest Online Tailor Shop in BD">
    <meta name = "keywords" content = "Welcome To The Biggest Online Tailor Shop in BD">
    <meta name = "author" content = "Evan">
    <title>TailorBD.com | Welcome</title>
    <link rel="stylesheet" href = "./css/style.css">

  </head>
  <body>
    <header>
      <div class = "container">
        <div id="branding">
          <h1><span class = "highlight"><a href="index.html">TailorBD</a></span>.com</h1>
        </div>
        <nav>
          <u1>
            <li class = "current"><a href="index.html">Home</a></li>
            <li><a href="nearby.html">Nearby Shops</a></li>
            <li><a href="postad.html">Post Your Ad</a></li>
            <li><a href="signup.html">Sign-up</a></li>


        </nav>
      </div>



      

    </header>
    <section id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2" style="margin-top: 2%;">
            <div class="row">

            <?php   

          $connection = mysqli_connect('localhost', 'root', '','authentication');
          if(isset($_POST['search'])) {
                  $searchkey = $_POST['search'];
                  $sql = " SELECT * FROM Details Where Shop_Address  Like '%$searchkey%' ";
          }else
          


             $sql = "SELECT * FROM Details ";
             $result = mysqli_query($connection,$sql);

            
            ?>
              <form action="" method="POST"> 
                <div class="col-md-6">
                  <input type="text" name="search" class='form-control' placeholder="Nearby Shop" value="" > 
          </div>
          <div class="col-md-6 text-left">
            <button class="btn">Search</button>
          </div>
        </form>
        <br>
        <br>
        <br>
        
        </div>
          <div>
        <table class="table table-bordered">
          <tr>
            <th style = "text- align:center ;" > Shop-Name</th>
            <th style = "text- align:center ;">Shop-Address </th>
            <th style = "text- align:center ;">Phone-Number</th>
            
          </tr>

           <?php while ($row = mysqli_fetch_object($result)){?>
          <tr>
            <td><?php echo $row->Shop_Name ?></td>
            <td><?php echo $row->Shop_Address ?></td>
            <td><?php echo $row->Phone_Number ?></td>
          </tr>
          <?php } ?>
         

        </table>
      </div>
    </div>
  </div>
</div>
</section>


    <section id="newsletter">
      <div class = "container">
        <h1>Welcome To The Biggest Online Tailor Shop of Bangladesh</h1>
      </div>
    </section>
    <section id="boxes">
      <div class = "container">
        <div class = "box">
          <img src="./img/hns.jpg">
          <h3>Help & Support</h3>
          <p>F.A.Q</p>
          <p>Contact with us</p>
          <p>Membership</p>
        </div>
        <div class = "box">
          <img src="./img/social.jpg">
          <h3>Social</h3>
          <p>Facebook</p>
          <p>E-mail</p>
          <p>Twitter</p>
        </div>
        <div class = "box">
          <img src="./img/login.png">
          <h3>Terms & Conditions</h3>
          <p>About us</p>
          <p>Terms and conditions</p>
          <p>Privacy Policy</p>
        </div>
      </div>

    </section>

    <footer>
      <p>TailorBD, Copyright &copy; 2018</p>
    </footer>

  </body>
</html>


