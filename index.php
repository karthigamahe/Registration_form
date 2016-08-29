<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="required.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<div id="emptyDiv">
</div>
<div id="description">
</div>
<form onsubmit="return required()" action="insert_data.php" method="post">
<div id="container">
    <div id="container_body">
        <div><h2 class="form_title"> Registration Form </h2></div>
        <div id="form_name">
            <div class="firstnameorlastname">
              <form name="form">
                <input class="input_name"  type="text" id="firstname" name="firstname" placeholder="First Name">
                <input  class="input_name" type="text" id="lastname" name="lastname" placeholder="Last Name">
              </form>
            </div>
            <div id="detail_form">
                <input type="radio" name="gender">&nbsp;Male&nbsp;<input type="radio" name="gender">&nbsp;Female&nbsp;<br><br>  
                <input class="input_form" type="text" id="phone"   name="phone" placeholder="Phone Number">
                <br><br>
                <input class="input_form" type="text" id="mobile"  name="mobile" placeholder="Mobile Number">
                <br><br>
                <input class="input_form" type="email" id="email"  name="email" placeholder="Email">
                <br><br>
                <input type="checkbox" id ="checkbox" name="checkbox">&nbsp;BBA&nbsp;<input type="checkbox" id ="checkbox" name="checkbox">&nbsp;BCA&nbsp;<input type="checkbox" id ="checkbox" name="checkbox">&nbsp;MBA<br><br>
                <input class="input_form"  type="text" id="address1" placeholder="Address1"  name="address1"><br><br>
                <input class="input_form" type="text" id="address2" placeholder="Address2"  name="address2"><br><br>
                <input class="input_form" type="text" id="city" placeholder="City"  name="city"><br><br>
                <input class="input_form" type="text" id="state"  placeholder="State" name="state"><br><br>
                <input class="input_form" type="text" id="zipcode" placeholder="Zipcode" name="zipcode">
            </div>
            <button id="btn_submit" name="submit">Submit</button>
        </div>
    </div>
</div>
</form>


</body>
</html>
