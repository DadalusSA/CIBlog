<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body style="background-color:antiquewhite;">
    <form class="form"  method="post" action="">
        <div class="container">
            <div class="main">
                <h2>Registration form</h2>
                <br />
                UserID&emsp;&emsp;&nbsp; : <input type="text" class="classreg" name="uid" id="uid">
                <br />
                First Name&emsp; :<input type="text"class="classreg"  name="ufname" id="ufname">
                <br />
                Larst Name&emsp;:<input type="text" class="classreg" name="ulname" id="ulname">
                <br />
                Email&emsp;&emsp;&emsp; :<input type="email" class="classreg" name="uemail" id="uemail">
                <br />
                Password&emsp;&nbsp;&nbsp; :<input type="password" class="classreg" name="password" id="password">
                <br />
                Confirm password&emsp; : <input type="password" class="classreg" id="cpassword">
                <br />
                Gender&emsp; :<input type="radio" name="gender" value="Male" onclick="genfunction(this.value)">Male &nbsp;
                <input type="radio" name="gender" value="Female" onclick="genfunction(this.value)">Female
                <br />
                DateofBirth(YYYY/MM/DD)&emsp; :<input type="text" class="classreg"name="dob" id="dob">
                <br />
                <br/>
                <input type="submit" id="register"  name="register" value="Register" />
                <br />
                <input type="text" name="genresult"  id="genresult" style="visibility:hidden" />


            </div>
        </div>
    </form>
    <p>&#169 2015 DadaRage. No Rights Reserved</p>
</body>
</html>