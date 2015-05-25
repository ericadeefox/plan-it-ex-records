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
 <img src="http://www.themetimeradio.com/wp-content/uploads/2006/06/divorce.jpg" height=75% width=auto style="float:left;">
 <ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="mission.html">Mission Statement</a></li>
  <li><a href="simple.html">Simple Plan</a></li>
  <li><a href="advanced.html">Advanced Plan</a></li>
  <li><a href="contact.html">Contact</a></li>
 </ul>
 <h1>The Plan-it-Ex Simple Plan!</h1>
 <h3>Mission statement. Legal custody. Physical custody.</h3>
 </div>
 <div class=main_page>
  <p>This is the form for when you & your spouse don't need to get into a lot in your plan. All it asks is what your names are, a few short statements on legal custody, and to briefly describe what physical custody and parenting time will look like.</p>
  <h3>Whoa whoa whoa, hold the phone? What's all this mean?!</h3>
  <p><b>Legal custody</b> refers to who gets to make parenting decisions. This can mean things like what religion the children are raised under, what kinds of schooling they'll receive, or even very specific things like when they go to bed. <i>(If you'd like to get more specific about legal custody, you can check out our <a href="advanced.html">advanced</a> plan!)</i> <b>Physical custody</b> refers to where the children live. They may stay with both parents, for however long, or with one parent while having <b>parenting time</b> with the other.</p>
  <p>Our <b>Simple Plan</b> is for parents who just want to briefly describe who calls the shots and where the kids live. Some parents don't want to turn their parenting style into a legal document, and that's okay!</p>
  <h1>Ready? Let's get started!</h1>
  </div>

  <div class=form>
<?php
$legal_custody = array('legal_custody1' => 'name1', 'legal_custody2' => 'name2');
$physical_custody = array('physical_custody1' => 'name1', 'physical_custody2' => 'name2'); ?>
<form action="simple.php" method="post">
    <div>
        <label for="name1">What's your name?</label>
        <input type="text" name="name1">
        <label for="name2">And what's your co-parent's name?</label>
        <input type="text" name="name2">
    </div>
	<br>
    <div>
	<label for="kids">Do you have an only child or multiple children?</label><br>
<input type="radio" name="kids" value="child">Only<br>
<input type="radio" name="kids" value="children">Multiple</br>
    </div>
	<br>
    <div>
	<label for="kids_names">What is/are your child/children's name(s)?</label>
	<input type="text" name="kids_names">
    </div>
	<h3>Legal custody questions:</h3>
    <div>
	<label for="legal_custody">Will you, your co-parent, or both of you have legal custody?</label><br>
<input type="radio" name="<?php echo(["legal_custody"]); ?>" value="Both of us">Both of us<br>
<input type="radio" name="<?php echo(["legal_custody"]); ?>" value="<?php echo(["legal_custody1"]); ?>">Me</br>
<input type="radio" name="<?php echo(["legal_custody"]); ?>" value="<?php echo(["legal_custody2"]); ?>">My co-parent</br>
    </div>
	<br>
    <div>
	<label for="legal_custody_description">Briefly describe your plans for legal custody, who has say in parenting decisions, and how those decisions will be made.</label><br>
	<textarea id="legal_custody_description" name="legal_custody_description"></textarea><br>
    </div>
	<h3>Physical custody questions:</h3>
    <div>
	<label for="physical_custody">Will you, your co-parent, or both of you have physical custody?</label><br>
<input type="radio" name="<?php echo(["physical_custody"]); ?>" value="Both of us">Both of us<br>
<input type="radio" name="<?php echo(["physical_custody"]); ?>" value="<?php echo(["physical_custody1"]); ?>">Me</br>
<input type="radio" name="<?php echo(["physical_custody"]); ?>" value="<?php echo(["physical_custody2"]); ?>">My co-parent</br>
    </div>
	<br>
    <div>
	<label for="physical_custody_description">Briefly describe your plans for physical custody, where & when children will stay with either parent, and what parenting time will look like.</label><br>
	<textarea id="physical_custody_description" name="physical_custody_description"></textarea><br>
    </div>
	<br>
    <div class="button">
        <input type="submit" name="formSubmit" value="See your plan!">
    </div>
</form>
  </div>

 <div class=title_bar>
  <p>&#169 Plan-it-Ex Records 2015</P>
 </div>

</div>
</body>
</html>
