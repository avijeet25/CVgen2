<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <title> CV Generator </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        p.one {
            border-style: solid;
            border-color: red;
        }

        p.two {
            border-style: solid;
            border-color: green;
        }

        p.three {
            border-style: solid;
            border-color: red green blue yellow;
        }

        h2.high {
            font-family: Cambria;
            background-color: #dddddd;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        div.a {
            padding: 35px 70px;
        }

        .img: {
            align: right;
        }

        .rotateimg270 {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg);
        }

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
   
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    <div class="form-heading">
        <center>
            <h1 style="font-size:60px;font-family:Kristen ITC;color:gold;">CV _ GENERATOR</h1>
        </center>
    </div>
    <br>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div><br>
    <h3 align = right><input type=button onClick="location.href='info3.php'" value='UPLOAD TXT FILE' class = "btn btn-primary btn-lg" align="right"></h3>
    
       <div class="container">
        <div class="col-sm-6">
            <div class="contact-form">
                <form method="POST" action="info2.php">
                    <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                    <br>

                    <input name="address1" type="text" class="form-control" placeholder="College Name" required>
                    <br>
                    <input name="address2" type="text" class="form-control" placeholder="Area" required>
                    <br>
                    <input name="address3" type="text" class="form-control" placeholder="City,State" required>
                    <br>

                    <input name="phoneno" type="number" class="form-control" placeholder="Phone No." required>
                    <br>
                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                    <br>
                    <input name="career_objective" type="text" class="form-control" placeholder="Career Objective" required>
                    <br>
                    <!--<input name = "ayear1" type="number" class ="form-control" placeholder="Xth Completion Year" required>-->
                    <button class="btn btn-secondary" disabled>Xth Completion Year</button>
                    <div style="width:200px;">
                        <select name="ayear1" type="number" class="form-control" value="Xth Completion Year" required>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>

                        </select>
                    </div>
                    <br>
                    <!--<input name = "ayear2" type="number" class ="form-control" placeholder="XIIth Completion Year" required>
		--><button class="btn btn-secondary" disabled>XIIth Completion Year</button>
                    <div style="width:200px;">
                        <select name="ayear2" type="number" class="form-control" value="XIIth Completion Year" required>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>

                        </select>
                    </div>
                    <br>
                    <!--<input name="board1" type="text" class="form-control" placeholder="Xth Board Name" required>
                    --><button class="btn btn-secondary" disabled>Xth Board Name</button>
                    <div style="width:200px;">
                        <select name="board1" type="text" class="form-control" value="XIIth Completion Year" required>

                            <option value="ICSE">ICSE</option>
                            <option value="CBSE">CBSE</option>
                            <option value="Others">Others</option>

                        </select>
                    </div>
                    <br>
                    <button class="btn btn-secondary" disabled>XIIth Board Name</button>
                    <!--<input name="board2" type="text" class="form-control" placeholder="XIIth Board Name" required>-->
                    <div style="width:200px;">
                        <select name="board2" type="text" class="form-control" value="XIIth Completion Year" required>

                            <option value="ICSE">ICSE</option>
                            <option value="CBSE">CBSE</option>
                            <option value="Others">Others</option>

                        </select>
                    </div>
                    <br>
                    <input name="col1" type="text" class="form-control" placeholder="Xth College/Institute Name" required>
                    <br>
                    <input name="col2" type="text" class="form-control" placeholder="XIIth College/Institute Name" required>
                    <br>
                    <input name="per1" type="number" class="form-control" placeholder="Xth Percentage/CGPA" required>
                    <br>
                    <input name="per2" type="number" class="form-control" placeholder="XIIth Percentage/CGPA" required>
                    <br>
                    <input name="tr_pr" type="text" class="form-control" placeholder="Training & Projects Undertaken" required>
                    <br>
                    <input name="cs_sk_lang" type="text" class="form-control" placeholder="Computer Languages Known" required>
                    <br>
                    <input name="cs_sk_other" type="text" class="form-control" placeholder="Technical Platforms Known" required>
                    <br>
                    <button class="btn btn-secondary">Date Of Birth</button><input name="dob" type="date" class="form-control" placeholder="Date Of Birth" required>
                    <br>
                    <input name="Fname1" type="text" class="form-control" placeholder="Father's Name" required>
                    <br>
                    <input name="Mname1" type="text" class="form-control" placeholder="Mother's Name" required>
                    <br>
                    <input name="Category" type="text" class="form-control" placeholder="Category" required>
                    <br>
                    <!--<input name="Gender" type="text" class="form-control" placeholder="Gender" required>
                       -->
                    <button class="btn btn-secondary" disabled>Gender</button>
                    <div style="width:200px;">
                        <select name="Gender" type="text" class="form-control" required>

                            <option value="Male">MALE</option>
                            <option value="Female">FEMALE</option>
                            <option value="Others">Others</option>

                        </select>
                    </div>
                    <br>
                    <input name="Nationality" type="text" class="form-control" placeholder="Nationality" required>
                    <br>
                    <input name="ht" type="text" class="form-control" placeholder="Home Town" required>
                    <br>
                    <input name="PAddress" type="text" class="form-control" placeholder="Permanent Address" required>
                    <br>
                    <input name="Languages" type="text" class="form-control" placeholder="Speaking Languages" required>
                    <br>
                    Upload Profile Picture
                    <input type="file" name="myfile" id="fileToUpload">
                    
                    <br><br>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg">
                    
                    <!--<input type = "submit" class "form-control value ="Generate";-->
                </form>
                
                <br><br><br><br>
            </div>
        </div>
    </div>
    <br>
</body>

</html>
