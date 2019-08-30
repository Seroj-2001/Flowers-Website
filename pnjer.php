<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
  
html{
  height: 100%;
}
body{
  height: 100%;
  margin: 0;
  background-color: #caba9f;
  background-size: cover;
  font-style: italic;
  background-position: center;
  background-attachment: fixed;
  }
header{
  height:50px;
  background-color:black;
  position: fixed;
  top:0;
  width: 100%;

  
}
.topnav {
  overflow:auto;
  background-color: #908572;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
box-shadow: 0 0 20px white;
background-color: #caba9f;
  transition: 0.3s;
  text-decoration: none;
  color: black;
}

.activ {
  background-color:#908572;
  box-sizing: border-box;
  color: white;
}

.topnav .icon {
  display: none;
}
.icon{
  height: 60px;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
}
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
main{
  max-width: 1200px;
  margin: 80px auto 30px auto;
  min-height: 1000px;
  background-color:#908572;
  padding: 20px;
  box-sizing: border-box;

}
#left{
  width: 280px;
  padding-right: 20px;
  box-sizing:border-box;
  min-height: 1000px;
  float: left;
  border-right:2px solid rgba(255,255,255,0.2);
  margin-bottom: 30px;
}
#right{
  width: 880px;
  padding-right: 20px;
  box-sizing:border-box;
  min-height: 1000px;
  float: left;
  margin-bottom: 30px;

}
footer{
  clear:both;
  height: 180px;
  background-color:#caba9f;

}
.cat{
  display: block;
  width: 100%;
  border:2px solid white;
  line-height: 30px;
  color:white;
  text-align: center;
  text-decoration: none;
  margin-bottom: 5px;
  font-size: 20px;
}
.cat:hover{
  border-radius: 50%;
  background-color: black;
  box-shadow: 0 0 20px white;
  transition: 0.5s;
  transform:scale(1.05);
  text-decoration: none;
  color:white;
}
.item{
  padding: 20px;
  background-color: #caba9f;
  margin-bottom: 10px;
  min-height: 300px;
 }
 .cover{
  width: 200px;
  height: 300px;
  background-color:grey;
  margin-right: 20px;
  float: left;
  background-size: cover;
  background-position: center;

 }
 .item h2 {
  margin-top: 0;
  font-size: 40px;

 }
 .item p{
  text-align: justify;
 }
 .property{
font-size: 20px;
 }
 #patvirel{
  display: block;width: 50%;border:2px solid white;line-height: 30px;color:white;text-align: center;text-decoration: none;margin-bottom: 5px;margin-left: 220px;font-size: 20px;box-sizing: border-box;

 }
footer h1{
  font-size: 20px;
  color: black;
  width: 150px;
  text-align: center;
    cursor: pointer;
}
footer h1:hover{
  box-shadow: 0 0 20px white;
  transition: 0.3s;
  transform:scale(1.05);
  border-radius: 50%;
  background-color: #908572;

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
    background-color: #908572;

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
  <header> 
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
</header>
  <main>
    <div id="left">
      <p class="caxikner" style="font-size:50px;text-align: center;color:white;">Ծաղիկներ</p>
     <a class='cat' href='vard.php'>Վարդեր</a>
     <a class='cat' href='hot.php'>Հատով Ծաղիկներ</a>
     <a class='cat' href='pnjer.php'>Փնջեր</a>
     <a class='cat' href='komp.php'>Կոմպոզիցիաներ</a>
     <a class='cat' href='tsakaman.php'>Ծաղկամանով ծաղիկներ</a>
     <a class='cat' href='psak.php'>Սգո պսակներ</a>
        </div>

    <div id="right">
          <div class="item">
        <div class="cover" style="background-image: url('img/page2.jpg')"></div>
        <h2>Մանուշակ</h2>
        <p style="font-size: 20px;">Մանուշակների ցեղն իր մեջ ընդգրկում է բավական շատ տեսակներ, որոնցից աչքի ենընկնում եռագույն մանուշակը , որը վայրի վիճակում հանդիպում է Եվրոպական համարյա բոլոր երկրներում, ինչպես նաև հոտավետ  և եղջերավոր մանուշակները, որոնց վայրի վիճակում կարելի է հանդիպել Սովետական Միության տարբեր վայրերում, գլխավորապես Կովկասում: Սելեկցիայի և հիբրիդիզացիայի շնորհիվ ստացվել են խոշորածաղիկ եռագույն մանուշակների  բազմաթիվ սորտեր</p>
    

        </div>
      </div>


    <footer >
      <h1 >+37477881266</h1>
      <h1>+37493381266</h1>
      <h1>+37455881266</h1>
      <div>   
        
              <a href="https://ok.ru/profile/540123025397" target="_blank"><img src="img/ok.png"></a>
              <a href="https://www.facebook.com/profile.php?id=100028146971897  " target="_blank"><img src="img/facebook.png"></a>
              <a href="https://www.instagram.com/enjl_tsaghki_srah_eghvardum/" target="_blank"><img src="img/instagram.png"></a>
            </div>
              
    </footer>
  </main>
  <img src="img/verev.jpg" id="top">
    <script type="text/javascript" src="jquery-min.js"></script>
    <script type="text/javascript" >
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