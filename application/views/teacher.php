<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color: white;
        }
        nav{
            width: 100%;
            background-color: #C91F0E;
            overflow: hidden;
        }
        nav a{
            display: block;
            float: left;
            font-family: sans-serif; 
            font-size: 15px; 
            color: white;
            background-color: #C91F0E;
            padding-top: 20px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            text-decoration: none;
        }
        nav a:hover{
            background-color: #FF5733;
        }
        #logo{
            font-family: 'HInd', sans-serif;
            float: left;
            font-size: 30px;
            letter-spacing: -2px;
            text-shadow: 1px 1px 2px #c4c4c4;
            padding-left: 20px;
            padding-right: 40px;
            margin-right: 10px;
            margin-top: -10px;
        }
        #above{
            padding-top: 70px;
            text-align: center;
            font-family: georgia;
            color: black;
        }
        #notify{
            margin-top: -10px;
        }
        #profile{
            float: right;
        }
    </style>
</head>
<body>
<div>
    <nav>
    <div >
		<a href="teacher.php"><img src="tassia.jpeg" height = 100px; width = 50%></a>
	</div>
    <div id = "notify">
        <a id="profile">ADMIN: HEADTEACHER</a>
    </div>

    </nav>
</div>
<div id = "above">

        <h1>WELCOME</h1>
        <h2>What would you like to do?</h2>
    
        <a style="display: block; height: 100px; width: 500px; background-color: #C91F0E; text-align: center; font-weight: bold; font-size: 200%; line-height: 100px; font-family: Georgia; border-radius: 20px; text-decoration: none;margin-left:500px;margin-top:100px;padding-left:1px;color:black" href= "admin.php" >VIEW TEACHERS</a>
        <a style="display: block; height: 100px; width: 500px; background-color: #C91F0E; text-align: center; font-weight: bold; font-size: 200%; line-height: 100px; font-family: Georgia; border-radius: 20px; text-decoration: none;margin-left:500px;margin-top:100px;padding-left:1px;color:black" href= "classes.php" >VIEW CLASSES</a>
        <a style="display: block; height: 100px; width: 500px; background-color: #C91F0E; text-align: center; font-weight: bold; font-size: 200%; line-height: 100px; font-family: Georgia; border-radius: 20px; text-decoration: none;margin-left:500px;margin-top:100px;padding-left:1px;color:black" href= "register.php" >MONITOR RESULTS</a>
        <a style="display: block; height: 100px; width: 500px; background-color: #C91F0E; text-align: center; font-weight: bold; font-size: 200%; line-height: 100px; font-family: Georgia; border-radius: 20px; text-decoration: none;margin-left:500px;margin-top:100px;padding-left:1px;color:black" href= "register.php" >MANAGE REPORTS</a>


</div>
</body>
</html>