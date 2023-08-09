<?php
						$ans="";
						$conn=mysqli_connect("localhost","root","","StudentDB");
						if($conn)
						{
							$dl = $_GET['dl'];
							$query1 = "SELECT * FROM Student where id = '$dl'";
							$result = mysqli_query($conn,$query1);
							$row = mysqli_fetch_array($result);
							$s01=$row['s1'];
							$s02=$row['s2'];
							$s03=$row['s3'];
							$s04=$row['s4'];
							$s05=$row['s5'];
							$s06=$row['s6'];
							if(isset($_POST['n_ame']))
							{
								if(!empty($_POST['name']))
								{
									$name=$_POST['name'];
									$query = "UPDATE Student SET name = '$name' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['i_d']))
							{
								if(!empty($_POST['id']))
								{
									$id=$_POST['id'];
									$query = "UPDATE Student SET id = '$id' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['s_1']))
							{
								if(!empty($_POST['s1']))
								{
									$s1=$_POST['s1'];
									$cgpa=($s1+$s02+$s03+$s04+$s05+$s06)/6;
									$query = "UPDATE Student SET s1 = '$s1',CGPA = '$cgpa' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['s_2']))
							{
								if(!empty($_POST['s2']))
								{
									$s2=$_POST['s2'];
									$cgpa=($s01+$s2+$s03+$s04+$s05+$s06)/6;
									$query = "UPDATE Student SET s2 = '$s2',CGPA = '$cgpa' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['s_3']))
							{
								if(!empty($_POST['s3']))
								{
									$s3=$_POST['s3'];
									$cgpa=($s01+$s02+$s3+$s04+$s05+$s06)/6;
									$query = "UPDATE Student SET s3 = '$s3',CGPA = '$cgpa' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['s_4']))
							{
								if(!empty($_POST['s4']))
								{
									$s4=$_POST['s4'];
									$cgpa=($s01+$s02+$s03+$s4+$s05+$s06)/6;
									$query = "UPDATE Student SET s4 = '$s4',CGPA = '$cgpa' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['s_5']))
							{
								if(!empty($_POST['s5']))
								{
									$s5=$_POST['s5'];
									$cgpa=($s01+$s02+$s03+$s04+$s5+$s06)/6;
									$query = "UPDATE Student SET s5 = '$s5',CGPA = '$cgpa' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['s_6']))
							{
								if(!empty($_POST['s6']))
								{
									$s6=$_POST['s6'];
									$cgpa=($s01+$s02+$s03+$s04+$s05+$s6)/6;
									$query = "UPDATE Student SET s6 = '$s6',CGPA = '$cgpa' WHERE id = '$dl'; ";
									$rs=mysqli_query($conn,$query);
									$ans="Record is updated";
								}
							}
							elseif(isset($_POST['done']))
							{
								header("location: show.php");
							}
						}
						else
						{
							echo "MYSQL not connected<br>";
						}
?>
<html>
	<head>
		<title>
			Display Page
		</title>
		<style>
			*{
				margin:0;
				padding:0;
			}
			.container{
				background-color:white;
				height:100vh;
				width:100vw;
			}
			.head{
				background-color:black;
				height:10%;
				width:100%;
				font-color:white;
			}
			.tail{
				background-color:black;
				height:10%;
				width:100%;
			}
			.main{
				background-color:grey;
				height:80vh;
				width:100vw;
			}
			li{
				list-style:none;
				float:right;
			}
			li a{
				display:block;
				color:white;
				text-align:center;
				padding:3.5vh 2vw;
				text-decoration:none;
			}		
			.btn
			{
				color:cyan;
				background-color:green;
				height:4vh;
				width:5vw;
				border:none;
				cursor:pointer;
				font-weight:bold;
				font-style:italic;
				font-size:2vh;
			}
			.a,.c{
				height:25%;
				width:100%;
			}
			.input{
				height:3.5vh;
				width:15vw;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="head">
			<ul>
				<li><a href="home1.php">HOME</a></li>
				<li><a href="insert.php">INSERT</a></li>
				<li><a href="show.php">SHOW</a></li>
				<li><a href="code.php">CODE</a></li>
				<li><a href="home.php">LOGOUT</a></li>
			</ul>
			</div>
			<div class="main">
				<div class="a"></div>
				<div class="b">
				<table height="50%" width="25%" cellspacing="0" align="center" style="margin-left:auto;margin-right:auto;">
					<form method="post">
						<tr align="center"><td colspan="2"><big><b>Student-Details</b></big></td></tr>
						<tr align="center">
							<td><b>Name:</b></td>
							<td><input class="input"type="text" name="name"placeholder="Ashish Kumar Singh"></td>
							<td><input class="btn"type="submit" name="n_ame" value="update"></td>
						</tr>
						<tr align="center">
							<td><b>Id:</b></td>
							<td><input class="input"type="number" name="id" placeholder="13089"></td>
							<td><input class="btn"type="submit" name="i_d" value="update"></td>
						</tr>
						<tr align="center">
							<td><b>SEM-1:</b></td>
							<td><input class="input"type="number" name="s1" min="0" max="10"step="0.01" placeholder="SGPA"></td>
							<td><input class="btn"type="submit" name="s_1" value="update"></td>
						</tr>
						<tr align="center">
							<td><b>SEM-2:</b></td>
							<td><input class="input"type="number" name="s2" min="0" max="10"step="0.01" placeholder="SGPA"></td>
							<td><input class="btn"type="submit" name="s_2" value="update"></td>
						</tr>
						<tr align="center">
							<td><b>SEM-3:</b></td>
							<td><input class="input"type="number" name="s3" min="0" max="10"step="0.01" placeholder="SGPA"></td>
							<td><input class="btn"type="submit" name="s_3" value="update"></td>
						</tr>
						<tr align="center">
							<td><b>SEM-4:</b></td>
							<td><input class="input"type="number" name="s4" min="0" max="10"step="0.01" placeholder="SGPA"></td>
							<td><input class="btn"type="submit" name="s_4" value="update"></td>
						</tr>
						<tr align="center">
							<td><b>SEM-5:</b></td>
							<td><input class="input"type="number" name="s5" min="0" max="10"step="0.01" placeholder="SGPA"></td>
							<td><input class="btn"type="submit" name="s_5" value="update"></td>
						</tr>
						<tr align="center">
							<td><b>SEM-6:</b></td>
							<td><input class="input"type="number" name="s6" min="0" max="10"step="0.01" placeholder="SGPA"></td>
							<td><input class="btn"type="submit" name="s_6" value="update"></td>
						</tr>
						<tr><td colspan="3" align="center"><input class="btn"type="submit" name="done" value="Done" style="background-color:blue"></td></tr>
						<tr><td colspan="3" align="center"><?php echo $ans;?><td><tr>
					</form>
				</table>
				</div>
				<div class="a"></div>
			</div>
			<div class="tail">
				<center><p><font color="white">Content on this website is owned, by the  Ashish Kumar singh</p>
				<p>Site is technically designed, hosted and maintained by Myself</p>
				<p>Powered By — Myself</font></p></center>
			</div>
		</div>
	</body>
</html>