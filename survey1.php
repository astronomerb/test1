<?php 
include("header.html");
?><?php 
include("header.html");
?>

	
<!--- --------------------------------------------------------------------------------- --->	
<!--- ---------------------------CONTENT ---------------------------------------------- --->
<!--- --------------------------------------------------------------------------------- --->		
<!--- ------------------------THE BBUBBLE STATS---------------------------------------- --->		
<!--- --------------------------------------------------------------------------------- --->	
<div class="content">

<h4 style="text-align:center; color: #FAFAFA;   font-size:30px; ">CEO.CA Feedback Survey 
</h4>

<h4 style="text-align:center; color: #FAFAFA;   font-size:20px; ">
</h4>

<h4 style="text-align:center; color: #FAFAFA;   font-size:20px; ">How can CEO.CA improve their user experience?
</h4>
<form action="survey1.php" method="post">


<!-- --------------------------------------------------------------------	
-------------------------CEO USER INFORMATION----------------------------	
--------------------------------------------------------------------- -->
<fieldset style="color: #F2F2F2;">
	<legend> CEO.CA User Information: </legend>
	<label for="username">Username</label>
	<br />
	<input type="text" name="username" id="username"  />
	<br />
	<br />
	<label for="years">How long have you been a CEO.CA member?</label>
	<br />	
  <select name="years">
    <option value="volvo">Under 1 year</option>
    <option value="saab">Between 1 and 2 years</option>
    <option value="fiat">Over 3 years</option>
   </select>
  <br><br>
	</fieldset>

	<br />
	<br />
	
<!-- --------------------------------------------------------------------	
------------------------CEO WEBPAGE CHECKBOX-----------------------------	
--------------------------------------------------------------------- -->	
<h4 style="color: #F2F2F2;">These CEO members are industry professionals.
<br />
 Check off the writers whose website you've viewed before?
</h4>
	
	<input 	type="checkbox"	name="courses" 
			id="CC" />
	<label style="color: #F2F2F2;" for="CC">CriticalInvestor </label>
 
			
	<br />
		<input 	type="checkbox" 
			name="courses" 
			id="JK" />
	<label style="color: #F2F2F2;" for="JK">JamesKwantes</label>

	<br />
		<input 	type="checkbox" 
			name="courses" 
			id="NT" />
	<label style="color: #F2F2F2;" for="NT">Newton</label>

	<br />
	<input 	type="checkbox" 
			name="courses" 
			id="GF" />	
	<label style="color: #F2F2F2;" for="GF">Goldfinger</label>	

	<br />
	<input 	type="checkbox" 
			name="courses" 
			id="TM" />	
	<label style="color: #F2F2F2;" for="TM">Tommy</label>	

	<br />
	<input 	type="checkbox" 
			name="courses" 
			id="PT" />	
	<label style="color: #F2F2F2;" for="PT">PamplonaTrader</label>

	<br />
	<input 	type="checkbox" 
			name="courses" 
			id="AB" />	
	<label style="color: #F2F2F2;" for="AB">Allan</label>	

	<br />	
	<input 	type="checkbox" 
			name="courses" 
			id="DO" />	
	<label style="color: #F2F2F2;" for="DO">DanO</label>	

	<br />	

<br />
<br />

<!-- --------------------------------------------------------------------	
----------------------------Scale 1 to 5---------------------------------	
----------------------------CEO Experience--------------------------- -->
<h4 style="color: #F2F2F2;">On a scale of 1 to 5, how useful has CEO.CA been for you?
</h4>
	
	<input 	type="radio" 
			name="experience" 
			id="1" />
	<label style="color: #F2F2F2;"  for="1">Not Helpful</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="2"
			checked="checked" />
	<label style="color: #F2F2F2;" for="female">Somewhat Helpful</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="3" />
	<label style="color: #F2F2F2;" for="other">Nuetral</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="4" />
	<label style="color: #F2F2F2;" for="other">Helpful</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="5" />
	<label style="color: #F2F2F2;" for="other">Very Helpful</label>
	
	<br />
	<br />
	<br />



<!-- --------------------------------------------------------------------	
----------------------------Scale 1 to 5---------------------------------	
----------------------------CEO New User Ease------------------------ -->
<h4 style="color: #F2F2F2;">On a scale of 1 to 5, how easy would you say navigating through the site is for a new member?
</h4>
	
	<input 	type="radio" 
			name="experience" 
			id="1" />
	<label style="color: #F2F2F2;"  for="1">Very Difficult</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="2"
			checked="checked" />
	<label style="color: #F2F2F2;" for="female">Difficult</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="3" />
	<label style="color: #F2F2F2;" for="other">Nuetral</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="4" />
	<label style="color: #F2F2F2;" for="other">Quite Easy</label>
	<br />
	<input 	type="radio" 
			name="experience" 
			id="5" />
	<label style="color: #F2F2F2;" for="other">Very Easy</label>
	
	<br />

<!-- ---------------------------------------------------------------------	
-----------------------TEXT FIELD FOR USER COMMENTS-----------------------
---------------------------------------------------------------------- -->		
	<h4><label style="color: #F2F2F2;" for="comments">Comments?</label></h4>
	<textarea rows="4" cols="70" name="comments" id="comments"></textarea>
<br /><br />
	<input type="submit" value="Submit" class="button" />
<br /><br /><br /><br />
	<input type="reset" value="Reset" class="button" />
</form>

<!-- --------------------------------------------------------------------	
-------------------------------------------------------------------------	
--------------------------------------------------------------------- -->

</div>



<!--- --------------------------------------------------------------------------------- --->	
<!--- ---------------------------CONTENT 1--------------------------------------------- --->
<!--- --------------------------------------------------------------------------------- --->		
<!--- ------------------------THE TABLE INFORMATION------------------------------------ --->		
<!--- --------------------------------------------------------------------------------- --->
<div class="content1">




</div>
<?php 
include("footer.html");
?>