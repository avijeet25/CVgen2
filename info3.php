<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CVgen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style> 
    h5,h3,tr.high {
            font-family: Cambria;
            color: goldenrod;
        }
    tr.high {
            font-family: Cambria;
            color: silver;
        }
    
        </style>
</head>

<body style ="background-image: url('background.png');">
    <img src='mypic2.jpeg' alt='Profile picture' width="15%" align="right" hspace = "35px" vspace = "65px" style = "border:4px solid white">
</body>
    

</html>

<?php

		
//$name=$address=$address2=$address3=$phoneno=$email=$career_objective=$ayear1=$ayear2=$board1=$board2=$col1=$col2=$per1=$per2=$tr_pr=$cs_sk_lang=$cs_sk_other=$dob=$Fname1=$Mname1=$Category=$Genger=$Nationality=$ht=$PAddress=$Languages="";
	/*	
		   
			$name=test_input($_POST['name']);
			$address1=test_input($_POST['address1']);
			$address2=test_input($_POST['address2']);
			$address3=test_input($_POST['address3']);
			$phoneno=test_input($_POST['phoneno']);
			$email=test_input($_POST['email']);
			$career_objective=test_input($_POST['career_objective']);
			$ayear1=test_input($_POST['ayear1']);
			$ayear2=test_input($_POST['ayear2']);
			$board1=test_input($_POST['board1']);
			$board2=test_input($_POST['board2']);
			$col1=test_input($_POST['col1']);
			$col2=test_input($_POST['col2']);
			$per1=test_input($_POST['per1']);
			$tr_pr=test_input($_POST['tr_pr']);
			$per2=test_input($_POST['per2']);
			$cs_sk_lang=test_input($_POST['cs_sk_lang']);
			$cs_sk_other=test_input($_POST['cs_sk_other']);
			$dob=test_input($_POST['dob']);
			$Fname1=test_input($_POST['Fname1']);
			$Mname1=test_input($_POST['Mname1']);
			$Category=test_input($_POST['Category']);
			$Gender=test_input($_POST['Gender']);
			$Nationality=test_input($_POST['Nationality']);
			$ht=test_input($_POST['ht']);
			$PAddress=test_input($_POST['PAddress']);
			$LANGUAGES=test_input($_POST['Languages']);
		     
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
			
            return $data;
         }

        $x= fopen("Cvgen.txt",'w+');
        fwrite($x,$name);fwrite($x,"\n");
        fwrite($x,$address1);fwrite($x,"\n");
        fwrite($x,$address2);fwrite($x,"\n");
        fwrite($x,$address3);fwrite($x,"\n");
        fwrite($x,$phoneno);fwrite($x,"\n");
        fwrite($x,$email);fwrite($x,"\n");
        fwrite($x,$career_objective);fwrite($x,"\n");
        fwrite($x,$ayear1);fwrite($x,"\n");
        fwrite($x,$ayear2);fwrite($x,"\n");
        fwrite($x,$board1);fwrite($x,"\n");
        fwrite($x,$board2);fwrite($x,"\n");
        fwrite($x,$col1);fwrite($x,"\n");
        fwrite($x,$col2);fwrite($x,"\n");
        fwrite($x,$per1);fwrite($x,"\n");
        fwrite($x,$tr_pr);fwrite($x,"\n");
        fwrite($x,$per2);fwrite($x,"\n");
        fwrite($x,$cs_sk_lang);fwrite($x,"\n");
        fwrite($x,$cs_sk_lang);fwrite($x,"\n");
        fwrite($x,$dob);fwrite($x,"\n");
        fwrite($x,$Fname1);fwrite($x,"\n");
        fwrite($x,$Mname1);fwrite($x,"\n");
        fwrite($x,$Category);fwrite($x,"\n");
        fwrite($x,$Gender);fwrite($x,"\n");
        fwrite($x,$Nationality);fwrite($x,"\n");
        fwrite($x,$ht);fwrite($x,"\n");
        fwrite($x,$PAddress);fwrite($x,"\n");
        fwrite($x,$LANGUAGES);fwrite($x,"\n");
        fclose($x);
  */
global $name;global $address1;global $address2;global $address3;global $phoneno;global $email;global $career_objective;global $ayear1;global $ayear2;
global $board1;global $board2;global $col1;global $col2;global $per1;global $tr_pr;global $per2;global $cs_sk_other;global $cs_sk_lang;global $dob;
$x=fopen("CVgen.txt",'r');
while(!feof($x)) {
            $d=fgets($x);
            $data = explode(":",$d);
            $name=$data[0];
			$address1=$data[1];
			$address2=$data[2];
			$address3=$data[3];
			$phoneno=$data[4];
			$email=$data[5];
			$career_objective=$data[6];
			$ayear1=$data[7];
			$ayear2=$data[8];
			$board1=$data[9];
			$board2=$data[10];
			$col1=$data[11];
			$col2=$data[12];
			$per1=$data[13];
			$tr_pr=$data[14];
			$per2=$data[15];
			$cs_sk_lang=$data[16];
			$cs_sk_other=$data[17];
			$dob=$data[18];
			$Fname1=$data[19];
			$Mname1=$data[20];
			$Category=$data[21];
			$Gender=$data[22];
			$Nationality=$data[23];
			$ht=$data[24];
			$PAddress=$data[25];
			$LANGUAGES=$data[26];

        }

        
		echo"<h1 style = 'font-size:60px; font-family: Abyssinica SIL , sans-serif;color:gold;'>$name</h1>";
		
		
		echo"<button class = 'btn btn-secondary'><b>Address of Correspondence</b></button>";
		echo"<h5 class = 'high'>$address1</h5>";
		echo"<h5 class = 'high'>$address2</h5>";
		echo"<h5 class = 'high'>$address3</h5>";
		echo"<br>";
		
		echo"<h3 class='high'><b><button class = 'btn btn-primary' btn-lg disabled>Phone Number : </button></b>$phoneno</h3>";
		echo"<h3 class='high'><b><button class = 'btn btn-primary' btn-lg disabled>Email: </button></b>$email</h3>";
			echo"<br>";
					echo"<br>";
						
		echo"<h2 class='high'><button class = 'btn btn-secondary'>CAREER OBJECTIVE</button></h2>";
		echo"<h3 class='high'><i>$career_objective</i></h3>";
		echo"<br>";
		echo"<h2 class='high'><button class = 'btn btn-secondary'>ACADEMIC BACKGROUND</button></h2>";

		echo"<table>
			
			<tr class = 'high'>		<th>Year(s)</th>		<th>Qualification</th>			<th>Board/University</th>		<th>College/Institue/University</th>		<th>Percentage/CGPA</th>		</tr>
			<tr class = 'high'>		<td>$ayear1</td>		<td>10th</td>			<td>$board1</td>		<td>$col1</td>		<td>$per1</td>		</tr>
			<tr class = 'high'>		<td>$ayear2</td>		<td>12th</td>			<td>$board2</td>		<td>$col2</td>		<td>$per2</td>		</tr>
			
		</table>";		
        echo "<br>";echo "<br>";
				
			echo"<h2 class='high'><b><button class = 'btn btn-secondary' btn-lg> TRAINING & PROJECTS UNDERTAKEN</h2>";
			
			echo"<h3 class = 'high'>$tr_pr</h3>";
			echo"<br>";
		echo"<h2 class = 'high'><button class = 'btn btn-secondary'>COMPUTER SKILLS</button></h2>";
		
		echo"<h3 class='high'><b><button class = 'btn btn-primary' btn-lg disabled><b>LANGUAGES : </button> &nbsp $cs_sk_lang<b> </h3>";
			echo"<h3 class='high'><b><button class = 'btn btn-primary' btn-lg disabled>OTHERS   : </button> &nbsp  &nbsp  &nbsp $cs_sk_other.<b></h3> ";
			echo"<br>";
				echo"<h2 class = 'high'><button class = 'btn btn-secondary'>PERSONAL DETAILS</button></h2>";
				echo"<table style = 'font-size:18px;'>
					<tr class = 'high'>		<td>Date Of Birth</td>		<td>:</td>		<td><b>$dob</b></td>		</tr>
					<tr class = 'high'>		<td>Father's Name</td>		<td>:</td>		<td><b>$Fname1</b></td>		</tr>
					<tr class = 'high'>		<td>Mother's Name</td>		<td>:</td>		<td><b>$Mname1</b></td>		</tr>
					<tr class = 'high'>		<td>Category</td>		<td>:</td>			<td><b>$Category</b></td>		</tr>
					<tr class = 'high'>		<td>Gender</td>		<td>:</td>		<td><b>$Gender</b></td>		</tr>
					<tr class = 'high'>		<td>Nationality</td>		<td>:</td>		<td><b>$Nationality</b></td>		</tr>
					<tr class = 'high'>		<td>Home Town</td>		<td>:</td>		<td><b>$ht</b></td>		</tr>
					<tr class = 'high'>		<td>Permanent Address</td>		<td>:</td>		<td><b>$PAddress</b></td>		</tr>
					<tr class = 'high'>		<td>Phone No.</td>		<td>:</td>		<td><b>$phoneno</b></td>		</tr>
					<tr class = 'high'>		<td>Languages Known</td>		<td>:</td>		<td><b>$LANGUAGES</b></td>		</tr>";

		
	?>				
	