<!DOCTYPE html>
<html lang="en">
<head>
  <title>Covid-19 India</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">   
  <style type="text/css">
    body {
  margin: 0;
  
  font-family: Arial, Helvetica, sans-serif;
  background-color:lightblue;
}
.navbar{
      background-color: #000 ! important;
    }
    #navbarid a{
        color: white;
    }
    .navbar{
        overflow: hidden;
       background-color: black;
       padding: 1% 1%;
    }
    .navbar a {
       float: left;
       color: white;
         text-align: center;
         padding: 12px;
         text-decoration: none;
         font-size: 18px;
       line-height: 25px;
        border-radius: 4px;
    }
    .navbar a:hover {
        background-color:blue;
      color: white;
    }
.p{
    word-wrap:break-word;
}
.container{
  min-height: 100%;
}
table{
  width: 100%;
}

* {
  box-sizing: border-box;
}
  #leftside img{
     animation : heartbeat 5s linear infinite;
   }
   @keyframes heartbeat{
    0%{
      transform: scale(.75);
    }
    20%{
      transform: scale(1);
    }
    40%{
      transform: scale(.75);
    }
    60%{
      transform: scale(1);
    }
    80%{
      transform: scale(.75);
    }
    100%{
      transform: scale(.75);
    }
   }
 

  </style>
 
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-black " >
      <div class="container-fluid">
      <div class="text-white"><h3>Covid-19</h3></div>
      <button class="navbar-toggler" data-toggle="collapse"data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarid">
      <ul class="navbar-nav text-center ml-auto">
        <li class="nav-item">
          <a href="#home" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">Contact</a>
        </li>
       
        <li class="nav-item">
          <a href="#symptoms" class="nav-link">Symptoms</a>
        </li>
        <li class="nav-item">
          <a href="#prevention" class="nav-link">Prevention</a>
        </li>
      </ul>
      </div>
      </div>
    </nav>

     <section style="background-color: #eafafa;">
  
    <div class="container mt-5 mb-5">
          <div class="row ">
               
              <div class= "col-lg-5 col-md-5 col-12 order-lg-1 order-2 " id="leftside">
                 <img src="images/logo.jpg">
              </div >
              <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1" style="margin-top:2%">
                  <h2> Let's Stay Safe and Fight together Against CORONA Virus</h2>
              </div>
          </div>
    </div>
</section >

<section class="corona_update container-fluid" style="background-color: #eafafa;" id="home">
  <div class="mb-3 ">
    <h3 class="text-center text-uppercase "> Covid 19 India Tracker</h3>
  </div>
  <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval" >
        <tr>
          <th class="text-capitalize text-danger">last Updated time</th>
          <th class="text-capitalize text-danger"> State</th>
          <th class="text-capitalize text-danger">Total Confirmed</th>
          <th class="text-capitalize text-danger">Active Case</th>
          <th class="text-capitalize text-danger">Recovered</th>
          <th class="text-capitalize text-danger">Deaths</th>
        </tr>
        <?php 
            $data=file_get_contents('https://api.covid19india.org/data.json');
            $coronalive=json_decode($data,true);

            // echo "<pre>";
            //   print_r($coronalive);
            //  echo "</pre>";
             $statecount=count($coronalive['statewise']);
             $i=1;
             while($i<$statecount){
               ?>
               <tr>
                 <td><?php  echo $coronalive['statewise'][$i]['lastupdatedtime']?></td>
                 <td><?php  echo $coronalive['statewise'][$i]['state']?></td>
                 <td><?php  echo $coronalive['statewise'][$i]['confirmed']?></td>
                 <td><?php  echo $coronalive['statewise'][$i]['active']?></td>
                 <td><?php  echo $coronalive['statewise'][$i]['recovered']?></td>
                 <td><?php  echo $coronalive['statewise'][$i]['deaths']?></td>
               </tr>
              <?php
              $i++;
             }
         ?>

      </table>
    
  </div>
</section>
<section style="background-color: #eafafa;" id="about">
    <div class="container-fluid">
        <div class="mt-5 mb-5"><center><h2> <b>About Corona</b></h2></center></div>
        <div class="row">
          <div class="col-md-6 " style="padding: 0% 1%; float: center;padding-left: 8%;">
              <img src="images/corona.jpg" width="60%" height="80%">
          </div>
           <div class="col-md-6">
             <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
           </div>
 
</div>
    </div>

</section>

<section style="background-color: #eafafa;" id="contact">
  <div class="container-fluid bg-primary pt-4 pb-4 mt-5 mb-5"> 
        <div>
          <center><h3>Central Helpline Number For Corona Virus</h3></center></br>
          <center><h3>+91-11-23978046</h3></center>
       </div>
    
  </div>
</section>
<section style="background-color: #eafafa;" id="symptoms">
 
 <div class="container">
  <div class="container-fluid">
    <div class="mt-5 mb-5"><center><h2><b>SYMPTOMS</b></h2></center></div>
  <div class="row">
    <div class="col"><img src="images/cough.jpg"><p>Cough</p></div>
    <div class="col"><img src="images/fever.jpg"><p>Fever</p></div>
    <div class="col"><img src="images/headache.jpg"><p>Headache</p></div>
  </div>
  <div class="row">
    <div class="col"><img src="images/breathing_difficulties.jpg"><p>Breath Difficult</p></div>
    <div class="col"><img src="images/sneeze.jpg"><p>Sneeze</p></div>
    <div class="col"><img src="images/muscle_pain.jpg"><p>Muscle Pain</p></div>
  </div>
</div>
</div>
</section>
<section style="background-color: #eafafa;" id="prevention">
 
 <div class="container">
  <div class="container-fluid">
         <div class="mt-5 mb-5"><center><h2><b>PREVENTION</b></h2></center></div>
  <div class="row">
    <div class="col"><img src="images/clean.jpg" ><pre> </pre></div>
    <div class="col"><img src="images/dispose.jpg"><pre> </pre></div>
    <div class="col"><img src="images/social_distancing.jpg"> <pre> </pre></div>
  </div>
  <div class="row">
    <div class="col"><img src="images/cover_mouth.jpg"><pre> </pre></div>
    <div class="col"><img src="images/wash_hands.jpg"><pre> </pre></div>
    <div class="col"><img src="images/avoid_touching.jpg"><pre> </pre></div>
  </div>
</div>
</div>
</section>



<section style="background-color: #eafafa;">
 <div class="footer-copyright text-center py-3 mt-3  bg-dark text-white ">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Covid19 India</a>
  </div>
</section>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
