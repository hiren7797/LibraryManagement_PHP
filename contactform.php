<html>
<head>
<link rel="stylesheet" type="text/css" href="css/contact1.css">
</head>
<body>
<span id="contactm">CONTACT US</span>
<span id="dmsg"> Email us with any questions or inquiries or call 987-542-9117.We would be</span>
<span id="dmsg1">happy to answer your questions and set up a meeting with you.</span>
<span id="dmsg2">We will help you in any manner.</span>
<div id="main">
<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name"><span id="mys">First Name</span></label>
 </td>
 <td valign="top">
  <input id="f_n" type="text" name="first_name" maxlength="50" size="30" placeholder="first name">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name"><span id="mys">Last Name</span></label>
 </td>
 <td valign="top">
  <input id="l_n" type="text" name="last_name" maxlength="50" size="30" placeholder="last name">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email"><span id="mys">Email Address</span></label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" placeholder="Email">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone"><span id="mys">Telephone Number</span></label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30" placeholder="phone number">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments"><span id="mys">Comments </span></label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="32" rows="10" placeholder="comments"></textarea>
 </td>
</tr>
</table>
<input id="button" type="submit" value="SEND MAIL">
</form>
</div>
</body>
</html>