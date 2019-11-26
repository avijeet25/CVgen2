<?php
		$name=$address=$address2=$address3=$phoneno=$email=$career_objective=$ayear1=$ayear2=$board1=$board2=$col1=$col2=$per1=$per2=$tr_pr=$cs_sk_lang=$cs_sk_other=$dob=$Fname1=$Mname1=$Category=$Genger=$Nationality=$ht=$PAddress=$Languages=" ";
		
		   if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $name = test_input($_POST["name"]);
            // $email = test_input($_POST["email"]);
            // $website = test_input($_POST["website"]);
            // $comment = test_input($_POST["comment"]);
            // $gender = test_input($_POST["gender"]);
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
			$PAddress=test_input($_POST['PAddress']);
			$LANGUAGES=test_input($_POST['LANGUAGES']);
		
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
		
		
		echo"<h1 style = 'font-size:60px; font-family: Abyssinica SIL , sans-serif;'>$name</h1>";
		
		
		echo"<h2><u><b>Address of Correspondence</b></u></h2>";
		echo"<p>$address1<br>$address2<br>$address3<br></p>";
		echo"<br>";
		
		echo"<h3><b>Phone: </b>$phoneno</h3>";
		echo"<h3><b>Email: </b>$email</h3>";
			echo"<br>";
					echo"<br>";
						
		echo"<h2 class='high'>CAREER OBJECTIVE</h2>";
		echo"<p><i>$career_objective</i></p>";
		echo"<br>";
		echo"<h2 class='high'>ACADEMIC BACKGROUND</h2>";

		echo"<table>
			
			<tr>		<th>Year(s)</th>		<th>Qualification</th>			<th>Board/University</th>		<th>College/Institue/University</th>		<th>Percentage/CGPA</th>		</tr>
			<tr>		<td>$ayear1</td>		<td>10th</td>			<td>$board1</td>		<td>$col1</td>		<td>$per1</td>		</tr>
			<tr>		<td>$ayear2</td>		<td>12th</td>			<td>$board2</td>		<td>$col2</td>		<td>$per2</td>		</tr>
			
		</table>";		
				
			echo"<h2 class='high' > TRAINING & PROJECTS UNDERTAKEN</h2>";
			/*<ul>
				<li>CLOUD WORKSHOP AND TRAINING PROGRAM BY MICROSOFT TECHNICAL COMUNITY</li>
				<li>LINKEDIN AND CV BUILDING WORKSHOP</li>
				<li>MICROSOFT AZURE WORKSHOP CONDUCTED BY MICROSOFT TECHNICAL COMUNITY</li>
				<li>GITHUB WORKSHOP BY CODING NINJA'S</li>
			</ul>*/
			echo"$tr_pr";
			echo"<br>";
		echo"<h2 class = 'high'>COMPUTER SKILLS</h2>";
		
		echo"<h3><b>LANGUAGES : $cs_sk_lang<br> </h3>";
			echo"<h3>OTHERS   : $cs_sk_other.<b></h3> ";
			echo"<br>";
				echo"<h2 class = 'high'>PERSONAL DETAILS</h2>";
				echo"<table style = 'font-size:18px;'>
					<tr>		<td>Date Of Birth</td>		<td>:</td>		<td><b>$dob</b></td>		</tr>
					<tr>		<td>Father's Name</td>		<td>:</td>		<td><b>$Fname1</b></td>		</tr>
					<tr>		<td>Mother's Name</td>		<td>:</td>		<td><b>$Mname1</b></td>		</tr>
					<tr>		<td>Category</td>		<td>:</td>			<td>$Category</td>		</tr>
					<tr>		<td>Gender</td>		<td>:</td>		<td><b>$Gender</b></td>		</tr>
					<tr>		<td>Nationality</td>		<td>:</td>		<td><b>$Nationality</b></td>		</tr>
					<tr>		<td>Home Town</td>		<td>:</td>		<td><b>$ht</b></td>		</tr>
					<tr>		<td>Permanent Address</td>		<td>:</td>		<td><b>$PAddress</b></td>		</tr>
					<tr>		<td>Phone No.</td>		<td>:</td>		<td><b>$phoneno</b></td>		</tr>
					<tr>		<td>Languages Known</td>		<td>:</td>		<td><b>$LANGUAGES</b></td>		</tr>";
	?>				