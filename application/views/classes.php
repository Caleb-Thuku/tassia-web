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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
<h2>TEACHERS</h2>

<table>
  <tr>
    <th>CLASS</th>
    <th>CLASS TEACHER</th>
    <th>NO.OF STUDENTS</th>
    
  </tr>
  <tr>
    <td>1E</td>
    <th>Teacher Phillip</th>
    <th>39</th>
  </tr>
  <tr>
    <td>2E</td>
    <th>Teacher N</th>
    <th>39</th>
  </tr>
  <tr>
    <td>3E</td>
    <th>Teacher Y</th>
    <th>39</th>
  </tr>
  <tr>
    <td>4E</td>
    <th>Teacher A</th>
    <th>39</th>
  </tr>
  <tr>
    <td>5E</td>
    <th>Teacher B</th>
    <th>39</th>
  </tr>
  <tr>
    <td>6E</td>
    <th>Teacher C</th>
    <th>39</th>
  </tr>
  <tr>
    <td>7E</td>
    <th>Teacher D</th>
    <th>39</th>
  </tr>
  <tr>
    <td>8E</td>
    <th>Teacher E</th>
    <th>39</th>
  </tr>
  
</table>
<a style="display: block; height: 50px; width: 300px; background-color: #C91F0E; text-align: center; font-weight: bold; font-size: 100%; line-height: 50px; font-family: Georgia; border-radius: 20px; text-decoration: none;margin-left:550px;margin-top:100px;padding-left:1px;color:black" href= "register.php" >SEE RESULTS</a>


</body>
</html>
