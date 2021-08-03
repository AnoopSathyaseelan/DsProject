<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body
{
  background-image: url(images/back.jpg);
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.column1
{
   float: left;
  width: 100%;
  margin-bottom: 16px;
  padding: 0 8px;
}

}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: #FFFFFF;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2 align="center">ABOUT US</h2>

<br>

<div class="row" align="center">
  <div class="column1">
    <div class="card">
      <div class="container"> 
        <h3>DESCRIPTION</h3>
        <p>We are ensuring that this system helps people to get their orders on time and to ensure that payment does not pose a problem. In other words we are ensuring the smoother functioning of the canteen as well as the customers in a secure manner. It is reliable and most importantly crucial for the current generation who are dependent on the time factor which plays a very important role in their lives. This is  a time saving canteen management system designed and customisable for different organizations.</p>
      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <center>
      
      <div class="container">
        <h2>Tanya Pravin</h2>
        <p class="title">TESTER</p>
        <p>The analysis phase and requirement phase was thoroughly studied and understood so as to overcome the difficulties in the current system and to ensure that people find it more user friendly and reliable. </p>
        <p>tanyap9716@gmail.com</p>
        <p><button class="button">Contact:876324566</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card" align="center">
      
      <div class="container">
        <h2>Anoop Sathyaseelan</h2>
        <p class="title">PROGRAMMER</p>
        <p> The language PHP was used mainly so that if someone wanted to understand how this project was put together it would be easier for anybody to understand. The ease of working with php is what lead to the completion of the project on time.</p>
        <p>anoopsathyaseelan@gmail.com</p>
        <p><button class="button">Contact:8286033093</button></p>

      </div>
    </div>

  </div>

</div>
<a href="index.php"><CENTER><STRONG>HOME</STRONG></CENTER></a>
</center>


</body>
</html>
