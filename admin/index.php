<style>
h2, h3, h4, h6, h7
{
font-weight: normal;
}
h1 {
    color:  green;
position: relative;
left: 250px;
width: 50%;
background-color: bisque;
  
padding:0px 50px;
a {
    color: bisque;
}
</style>

<h4 align="right" style="color: darkblue">
<strong><a href="../index.php">User Login</a></strong>
</h4>

<?php 

if(isset($_SESSION['id']))
{unset($_SESSION['id']);
}
?>
<head></head>
<body>

<h1 align="center"><strong>ONLINE APTITUDE TEST </strong></h1>

<div class="left">

</div>
 <div class="login-box">
<h3 align="center" style="color: red">
<?php 
  session_start();
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>


    <div class="lb-header">
      <a class="active" id="login-box-link">Administrative Login</a>
    </div>
  
    <form class="email-login" action="login.php" method="post">
      <div class="u-form-group">
        <input type="text" placeholder="Username" name="lid" required>
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Password" name="pass" required>
        </div>
      <div class="u-form-group">
        <button type="submit">Login</button>
      </div>
   
       
    </form>
 
  </div>







<style>
body{
 <!-- background-color: #1cbb9b; -->

}
.left {
    position: absolute;
    left: 50px;
    width: 60%;
     height: 60%;
    padding: 10px;

    background-image: url("images.jpg");
     background-repeat: no-repeat;
}


.login-box{
  position: relative;
   left: 300px;
  margin: 10px auto;
  width: 500px;
  height: 380px;
  background-color: #fff;
  padding: 10px;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
}
.lb-header{
  position:relative;
  color: #00415d;
  margin: 5px 5px 10px 5px;
  padding-bottom:10px;
  border-bottom: 1px solid #eee;
  text-align:center;
  height:28px;
}
.lb-header a{
  margin: 0 25px;
  padding: 0 20px;
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.lb-header .active{
  color: #029f5b;
  font-size: 18px;
}
.social-login{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  padding: 10px 0 15px 0;
  border-bottom: 1px solid #eee;
}
.social-login a{
  position:relative;
  float: left;
  width:calc(40% - 8px);
  text-decoration: none;
  color: #fff;
  border: 1px solid rgba(0,0,0,0.05);
  padding: 12px;
  border-radius: 2px;
  font-size: 12px;
  text-transform: uppercase;
  margin: 0 3%;
  text-align:center;
}
.social-login a i{
  position: relative;
  float: left;
  width: 20px;
  top: 2px;
}
.social-login a:first-child{
  background-color: #49639F;
}
.social-login a:last-child{
  background-color: #DF4A32;
}
.email-login,.email-signup{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  margin-top: 20px;
  text-align:center;
}
.u-form-group{
  width:100%;
  margin-bottom: 10px;
}
.u-form-group input[type="text"],
.u-form-group input[type="password"]{
  width: calc(50% - 22px);
  height:45px;
  outline: none;
  border: 1px solid #ddd;
  padding: 0 10px;
  border-radius: 2px;
  color: #333;
  font-size:0.8rem;
  -webkit-transition:all 0.1s linear;
  -moz-transition:all 0.1s linear;
  transition:all 0.1s linear;
}
.u-form-group input:focus{
  border-color: #358efb;
}
.u-form-group button{
  width:50%;
  background-color: #1CB94E;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
}
.forgot-password{
  width:50%;
  text-align: left;
  text-decoration: underline;
  color: #888;
  font-size: 0.75rem;
}
</style>