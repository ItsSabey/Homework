<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
    <script>
 $( function() {
   $( "#datepicker" ).datepicker();
 } );
 </script>
 <script>
  $( function() {
    $( ".controlgroup" ).controlgroup()
    $( ".controlgroup-vertical" ).controlgroup({
      "direction": "vertical"
    });
  } );
  </script>

</head>
<body>
    <form name="SignUp" method="post" action="">
        <div class="box">
      <h1>Sign Up</h1>

<div class="field-column">
    <label>Country</label>
    <div>
    <select id="Gender" class="demo-input-box">
        <option>Czechia</option>
        <option>Germany</option>

                   </select>
            <div class="field-column">
                <label>Name</label>
                <div>
                    <input type="text" class="demo-input-box"

                </div>
            </div>
            <div class="field-column">
                <label>Date</label>
                <div>
                    <input type="text" class="demo-input-box" id="datepicker"
                </div>
                </div>
                <div class="field-column">
                    <label>Gender</label>
                    <div>
                    <select id="Gender" class="demo-input-box">
                        <option>Male</option>
                                <option>Female</option>
                             <option>Other</option>

                                   </select>

                    </div>
                    </div>
            <div class="field-column">
                <label>Email</label>
                <div>
                    <input type="text" class="demo-input-box"
                </div>
                </div>
            <div class="field-column">
                <label>Password</label>
                <div><input type="password" class="demo-input-box"
                    name="password" value=""></div>
            </div>
            <div class="field-column">
                <label>Confirm Password</label>
                <div>
                    <input type="password" class="demo-input-box"
                        name="confirm_password" value="">
                </div>


            </div>
                <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btn">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
