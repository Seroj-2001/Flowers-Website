<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {  
  background-color: #caba9f;
  height: 100%;
  font-style: italic;
  font-size:15px;
}
.icon-bar {
  position: relative;
  width: 100%;
  background-color: #908572;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 13px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 30px;
}

.icon-bar a:hover {
  background-color: black;
  box-shadow: 0 0 120px white;
}

.activ {
  background-color:#908572 ;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #908572;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
   box-shadow: 0 0 20px white;
  transition: 0.3s;
  transform:scale(1.05);
  border-radius: 50%;
  background-color: #caba9f;
}


.container {
  border-radius: 5px;
  padding: 10px;
}


.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
h1 {
  margin-left: 5%;
  margin-top:25px;
  display: inline-block;
  font-size: 75px;
  color:  white;
}
.caxik{
 position: absolute;
  color: white;
  top:30%;
  margin-left: 5px;
  font-size:20px;
}
h2{
  position: absolute;
  right:22%;
  color:white;
}
label{
  color:white;
  margin-top: 20px;
}
footer{
  height: 200px;
  background-color:#908572;

}
footer h3{
  font-size: 20px;
  color: black;
  width: 150px;
  text-align: center;
    cursor: pointer;
background-
}
footer h3:hover{
  box-shadow: 0 0 20px white;
  transition: 0.3s;
  transform:scale(1.05);
  border-radius: 50%;
  background-color: #caba9f;

}
footer div a:hover{
box-shadow: 0 0 20px white;
  transition: 0.3s;
  transform:scale(1.50);
}
footer div a{
  
box-sizing: border-box;
display: inline-block;
margin-left: 2.5px;
}
footer div{
  float: left;
  display: inline-block;

}
footer p{
  display: inline-block;
  margin-bottom: 20px;
margin-right: 25%;
  font-size: 30px;
  cursor: pointer;

}
footer p:hover{
box-shadow: 0 0 20px white;
  transition: 0.3s;
  transform:scale(1.20);
    background-color: #caba9f;

}
.angle{
  width: 80%;
  height: 300px;
  text-align: center;
  display: inline-block;
  
}

#top{
    height: 50px;
    width: 50px;
    padding: 9px;
    bottom:20px;
    right: 20px;
    position: fixed;
    border-radius: 15px;
}
#top:hover{
box-shadow: 0 0 10px white;
  transition: 0.3s;
  transform:scale(1.20);
    background-color: #caba9f;
}
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a class="activ" href="home.php"><img style="height:30px; width:30px;" src="img/home.png"></a> 
  <a href="flower.php">Ծաղիկներ</a> 
  <a href="nverner.php">Նվերներ</a> 
  <a href="patver.php">Պատվերներ</a>
  <a href="about.php">Մեր մասին</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i> <img style="height:25px;width:25px;" src="img/navbar.png"></i>
   </a>
</div>
<div class="cointainer" style="text-align: center;">
<h1>Էնջլ ծաղկի սրահ</h1>
</div>

  <div style="text-align:center">
    <h2>Պատվերներ</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="img/7.gif" style="width:100%; height: 450px;">
    </div>
    <div class="column">
      <form action="MAILTO:narekkostanyan.777@gmail.com" method ="POST" enctype="text/plain">
        <label for="fname">էլ․ հասցէ</label>
        <input type="text" id="fname" name="email" placeholder="Գրեք ձեր էլ․ հասցէն․․">
        <label for="fname">Ապրանքի կոդը</label>
        <input type="text" id="fname" name="apranq" placeholder="Գրեք ապրանքի կոդը․․">
        <label for="lname">Հեռահոսահամար</label>
        <input type="text" id="lname" name="hamar" placeholder="Գրեք ձեր հեռախոսահամարը․․">
        <label for="country">Առաքման վայրը</label>
        <select id="country" name="country">
          <option value="australia">Երեւան</option>
          <option value="canada">Եղվարդ</option>
          <option value="usa">Նոր Հաճն</option>
          <option value="usa">Աբովյան</option>
          <option value="usa">Աշտարակ</option>
        </select>
        <label for="fname">Հասցե</label>
        <input type="text" id="fname" name="addres" placeholder="Գրեք առաքման հասցեն․․">
        <input type="submit" value="Պատվիրել" name="submit">
      </form>
    </div>
  </div>
 <footer class="cointainer">
      <h3>+37477881266</h3>
      <h3>+37493381266</h3>
      <h3>+37455881266</h3>
      <div>   
        
              <a href="https://ok.ru/profile/540123025397" target="_blank"><img src="img/ok.png"></a>
              <a href="https://www.facebook.com/profile.php?id=100028146971897  " target="_blank"><img src="img/facebook.png"></a>
              <a href="https://www.instagram.com/enjl_tsaghki_srah_eghvardum/" target="_blank"><img src="img/instagram.png"></a>
              
            </div>
              </footer>

    <img src="img/verev.jpg" id="top">
    <script type="text/javascript" src="jquery-min.js"></script>
            <script type="text/javascript">
                             function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
      $('#top').click(function(){
    $('html,body').animate({scrollTop:0},1000);
});
          </script>

</body>
</html>