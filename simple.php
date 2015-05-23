<html>
<head>
 <title>Plan-it-Ex Simple Parenting Plan</title>
 <link rel="stylesheet" type="text/css" href="simple.css">
 <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class=page>
 <div class=title_bar>
 <img src="http://www.themetimeradio.com/wp-content/uploads/2006/06/divorce.jpg" height=70% width=auto style="float:left;">
 <ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="mission.html">Mission Statement</a></li>
  <li><a href="simple.html">Simple Plan</a></li>
  <li><a href="advanced.html">Advanced Plan</a></li>
  <li><a href="contact.html">Contact</a></li>
 </ul>
 <h1>YOUR Plan-it-Ex Plan!</h1>
 <h3>Here's the final result from your Plan-it-Ex plan!</h3>
 </div>
 <div class=main_page>
<h1>Here's how your Plan will read!</h1>
<h3><U>Mission Statement</u></h3>
<p align=center>We, <?php echo $_POST["name1"]; ?> and <?php echo $_POST["name2"]; ?> agree to work cooperatively together in every aspect of parenting, in the best interests of our <?php echo $_POST["kids"]; ?>: <?php echo $_POST["kids_names"]; ?>. We agree to not <b>ever</b> use our <?php echo $_POST["kids"]; ?> against each other, or to "get back" at each other. When discussing parenting plans, philosophies, and arrangements, we agree to not make personal attacks or discuss factors irrelevant to our <?php echo $_POST["kids"]; ?>'s interests (such as personal habits or extramarital affairs). We agree to not speak badly of each other to our <?php echo $_POST["kids"]; ?> or any new partners we may have, and to behave in a mature, neutral fashion if our <?php echo $_POST["kids"]; ?> express concerns about us. We agree that all of our decisions are being made with <?php echo $_POST["kids_names"]; ?>'s best interests in mind, and to the best of our abilities. If we cannot abide by this mission statement and behave in a respectful manner, we agree to seek counsel from a mediator or family counselor to resolve the dispute.</p>
<h3><u>Legal Custody</u></h3>
<! -- okay I think you can see what I'm tryna do here but I don't know how to do it. -->
<p align=center><if(isset($_POST["legal_custody"])){
if($_POST["name1"]){
echo "name1";
}elseif($_POST["name2"]){
echo "name2";> will have legal custody of <?php echo $_POST["kids_names"]; ?>. Our plan for legal custody is as follows: <?php echo $_POST["legal_custody_description"]; ?></p>
<h3><u>Physical Custody</u></h3>
<p align=center><?php echo $_POST["physical_custody"]; ?> will have physical custody of <?php echo $_POST["kids_names"]; ?>. Our plan for physical custody is as follows: <?php echo $_POST["physical_custody_description"]; ?></p>
</div> 

<div class=title_bar>
  <p>&#169 Plan-it-Ex Records 2015</P>
 </div>

</div>
</body>
</html>
