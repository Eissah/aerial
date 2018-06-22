<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style>
		header{
	text-align: center;
	background-color: brown;
	color: white;
	padding: 1em;
	text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}
body{
	background-color: #020e19;
	color: white;
}
.profile
{
	
	background-color: brown;
	width: 200px;
	height: 1200px;
	float: left;
	padding: 2px;

}

.profile-picture
{

	background:no-repeat;
	background-image: url("icons/profile.png");
	width: 200px;
	height: 200px

}
#Profile-position
{
	background-color: white;
	color: black;
	margin-top: 5px;
	margin-bottom: 5px;
}
#quick
{
	margin-left: 210px;
	background-color: brown;
	text-align: center;
	position: relative;
}
.Report-Display
{
	
	margin: 5px;
}
.form-group{
	
	margin-left: 210px;
}
hr
{
	margin-left: 210px;
}


#sample{
	float: left;
}
#expense{
	position: relative;
}
#Invoice{
	float: left;
}
input{
	position: relative;
}
li{
	display: inline-block;
	padding: 20px 50px;

}

li:hover{
	cursor: alias;
	background-color: blue;
	color: white;
}
.footer{
	position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
	
	background-color: brown;
	color: white;
	text-align: center;
	padding;1em;
}
a
{
	color: white;
	
}





	</style>

</head>
<body>
	<header>
		
		<h1>Aerial Dst Company</h1>
		
	</header>

	<main>
		<div class="profile">
			<div class="profile-picture">
				
			</div>
			<div id="Profile-position">
				<p>Accountant</p>
			</div>
			<div class="others">
				<ul>
					<li><a href="index.php"><img src="icons/home.png">Home</a></li>
				<li><img src="icons/accounts.png" >Accounts</li>
				<li><img src="icons/store.png" >Store</li>
				<li><img src="icons/database.png">Customer Database</li>
					
				</ul>
				
			</div>
		</div>

		<div class="Report-Display"> 
			<h1 id="quick"> Quik Links</h1>
			<hr>
			<form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                Name: <select name="khas" value="<?=$exp?>">
                    <option>Bakery</option>
                    <option>Juice and bushera</option>
                    
                </select>
                Department: <select name="depar" value="<?=$exp?>">
                    <option>Reconciliation</option>
                    <option>accounts</option>
                    <option>Production</option>
                    <option>Management</option>
                </select>
                From Date: <input type="date" name="fdate">
                To Date: <input type="date" name="tdate">
                <input type="submit" name="submit" value="load">
            </form>
            <hr>

				
			
		</div>
		

	</main>
	<div class="footer">
		<span>Kakumba Nassir Issa</span>
		
	</div>


 <?php 
/* @var $_SERVER type */
           $in = filter_input(INPUT_SERVER, 'REQUEST_METHOD',FILTER_SANITIZE_STRING);
            if($in=="POST")
                {
               /* @var $_REQUEST type */
               $name = filter_input(INPUT_POST, 'khas',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
              $depar = filter_input(INPUT_POST, 'depar',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    /* @var $_POST type */
    
               if($name==="Bakery" && $depar==="Reconciliation")
               {
               
              include('form1.php');
                   
               } 
               else if($name==="Juice and bushera" && $depar==="Reconciliation"){
                   include ('Rbushera.php');
               }
           }
           ?>


	

</body>
</html>