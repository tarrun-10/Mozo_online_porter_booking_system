<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Tax Invoice</title>
    <link rel="shortcut icon" type="image/png" href="./favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      * {
        box-sizing: border-box;
      }

      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        word-break: break-all;
      }

      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        font-size: 16px;
      }
      .h4-14 h4 {
        font-size: 12px;
        margin-top: 0;
        margin-bottom: 5px;
      }
      .img {
        margin-left: "auto";
        margin-top: "auto";
        height: 30px;
      }
      pre,
      p {
        /* width: 99%; */
        /* overflow: auto; */
        /* bpicklist: 1px solid #aaa; */
        padding: 0;
        margin: 0;
      }
      table {
        font-family: arial, sans-serif;
        width: 100%;
        border-collapse: collapse;
        padding: 1px;
      }
      .hm-p p {
        text-align: left;
        padding: 1px;
        padding: 5px 4px;
      }
      td,
      th {
        text-align: left;
        padding: 8px 6px;
      }
      .table-b td,
      .table-b th {
        border: 1px solid #ddd;
      }
      .hm-p td,
      .hm-p th {
        padding: 3px 0px;
      }
      .cropped {
        float: right;
        margin-bottom: 20px;
        height: 100px; /* height of container */
        overflow: hidden;
      }
      .cropped img {
        width: 400px;
        margin: 8px 0px 0px 80px;
      }
      .main-pd-wrapper {
        box-shadow: 0 0 10px #ddd;
        background-color: #fff;
        border-radius: 10px;
        padding: 15px;
      }
      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        font-size: 14px;
      }
      .invoice-items {
        font-size: 14px;
        border-top: 1px dashed #ddd;
      }
      .invoice-items td{
        padding: 14px 0;
       
      }
    </style>
  </head>
  <body>
    <section class="main-pd-wrapper" style="width: 450px; margin: auto">
      <div style="
                  text-align: center;
                  margin: auto;
                  line-height: 1.5;
                  font-size: 14px;
                  color: #4a4a4a;
                ">

                
                <p style="font-weight: bold; color: #000; margin-top: 15px; font-size: 18px;">
                  Tax Invoice/Bill Of NGO-Support<br> Private Limited
                </p>
                <p style="margin: 15px auto;">
                  VIT HOSTEL <br>
                  Vellore
                </p>
                <p>
                  <b>GSTIN:</b> 0987653456789
                </p>
                <p>
                  <b>CIN:</b> 0987653456789
                </p>
                <p>
                  <b>FSSAI No:</b> 0987653456789
                </p>
                <hr style="border: 1px dashed rgb(131, 131, 131); margin: 25px auto">
              </div>
              <table style="width: 100%; table-layout: fixed">
                <thead>
                  <tr>
                    <th style="width: 50px; padding-left: 0;">Sn.</th>
                    <th style="width: 220px;">Item Name</th>
                    <th>QTY</th>
                    <th style="text-align: right; padding-right: 0;">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="invoice-items">
                    <td>01</td>
                    <td >Money</td>
                    <td>-</td>
                    <td style="text-align: right;">₹
                    
                    
                        <?php

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ngoDB";
                        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                                              
                        
                        // $res = "SELECT * FROM active WHERE Now = 'Now'";
                        
                        // $uname1 = $conn->query($res);
                        // $uname2 = $uname1->fetch_assoc();
                        
                        // $uname = $uname2["user"];
                    
                        // $mon = "SELECT * from donation WHERE uname = '$uname'";
                        // $mon0 = $conn->query($mon);
                        // $mon1 = $mon0->fetch_assoc();

                        // $mon2 = $mon1["cash"];

                        echo "Rs. 50";

                        
                        ?>
                    </td>
                  </tr>
                  </tr>
                  
                </tbody>
              </table>

              <table style="width: 100%;
              background: #fcbd024f;
              border-radius: 4px;">
                <thead>
                  <tr>
                    <th>Total</th>


                    <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "ngoDB";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                                          

                    // $res = "SELECT * FROM active WHERE Now = 'Now'";

                    // $uname1 = $conn->query($res);
                    // $uname2 = $uname1->fetch_assoc();

                    // $uname = $uname2["user"];

                    // $mon = "SELECT * from donation WHERE uname = '$uname'";
                    // $mon0 = $conn->query($mon);
                    // $mon1 = $mon0->fetch_assoc();

                    // $ut = $mon1["utility"];
                    // $cl = $mon1["clothes"];
                    // $mo = $mon1["cash"];

                    // $to = $ut + $cl ;

                    // $tocash = $ut*200 + $cl*100 + $mo;

                    // echo "<th style=\"text-align: center;\">Item ($to)</th>";
                    echo "<th style=\"text-align: right;\">₹ 50</th>";

                    ?>

                    
                    
                  </tr>
                </thead>
             
              </table>

              <table style="width: 100%;
              margin-top: 15px;
              border: 1px dashed #00cd00;
              border-radius: 3px;">
                <thead>
                  <tr>
                    <td>Total Saving In Rs: </td>
                    <td style="text-align: right;">₹ 
                    <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "ngoDB";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                                          

                    // $res = "SELECT * FROM active WHERE Now = 'Now'";

                    // $uname1 = $conn->query($res);
                    // $uname2 = $uname1->fetch_assoc();

                    // $uname = $uname2["user"];

                    // $mon = "SELECT * from donation WHERE uname = '$uname'";
                    // $mon0 = $conn->query($mon);
                    // $mon1 = $mon0->fetch_assoc();

                    // $ut = $mon1["utility"];
                    // $cl = $mon1["clothes"];
                    // $mo = $mon1["cash"];

                    // $to = $ut + $cl ;

                    // $tocash = $ut*200 + $cl*100 + $mo;
                    // $save = $tocash*0.1;

                    echo "10";

                    ?></td>
                  </tr>
                  <tr>
                    <td>Total Saving In %: </td>
                    <td style="text-align: right;">20%</td>
                  </tr>
                </thead>
             
              </table>

    </section>
    <!-- <center><button type="button" class="btn btn-success" onclick="location.href = './payment.php';">Pay</button></center> -->
  </body>
</html>
