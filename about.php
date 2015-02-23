<!DOCTYPE html>
<!--
UOL - Programming the Internet - Group Project
Week 3 - Assignment
Fabien Huraux
Joao Paulo Henriques Remedio  
Kevin Gargo 
-->
<html>
<?php
$style= '';
include "getcookie.php";
?>
<head>
    <title>UOL - Make U'R shirt - The Team</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
Link to external documents
-->
<link rel="stylesheet" type="text/css" href="css/<?php echo (!$style)?'white':rtrim($style," ");?>.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body id="bgdcolour" onload="checkCookie()">

   
        <!-- Definition of the dynamic menu using the HTML <nav> tag and CSS
    Created by Fabien -->
         <div class="fixed">
<?php include 'menu.php'; ?>
    </div>
    <!-- Page info and references By Joao
-->
    <div id="team">
        <p class="innertitle"> THE TEAM </p>
        <!-- Table with two columns, first column just for the design, the
        second contains the about content describing the team members by Joao-->
        <table id="tableteam">
            <tr>
                <!-- Specific styling for the first column -->
                <td id="tableteamleftcol">CKIT-503
                    <br> Programming the Internet
                </td>
                <td>Welcome to our website! This website is the result of an academic experience on HTML5, CSS3 and JavaScript technologies
                    <br> It all started in the beginning of 2015 when three classmates from the University of Liverpool had the idea of creating a website to sell custom t-shirts, polos, pullers and hoodies.
                    <br>
                    <br> The co-founders are:
                    <ul>
                        <li>
                            <a href="mailto:kevin.gargo@my.ohecampus.com">
                                Kevin Gargo</a>
                        </li>
                        <li>
                            <a href="mailto:joaopaulo.henriquesremedio@my.ohecampus.com">
                                Joao Paulo Henriques Remedio</a>
                        </li>
                        <li>
                            <a href="mailto:fabien.huraux@my.ohecampus.com">
                                Fabien Huraux</a>
                        </li>
                    </ul>
                    <br> All the images present on this website are royalty free and can be confirmed on the
                    <a href="about.html#ref">References</a> table.
                    <br>
                    <br>
                    <strong>Fabien Huraux</strong>
                    <br> The team leader. He is responsible for the
                    <a href="index.html">Home</a> page and defining the main style to be used through the website.
                    <br> He lives in the north-east of France, close to the Belgium, German and Luxembourgish border. He crosses the frontier with the Luxembourg on a daily basis, where he works for an European clearing and settlement house as information system auditor. His main activities are reviewing the processes and systems used within the group and assess any related risks.
                    <br> He holds the CISA, CISM and CISSP certifications, which are essentially related to IS governance.
                    <br>
                    <br>
                    <strong>Joao Remedio</strong>
                    <br> Responsible for the <a href="about.html">About us</a> page and getting the images.
                    <br> He lives in Geneva, Switzerland and he's original from Lisbon, Portugal. He works as a system administrator at the United Nations for about the last three years, mostly managing Active Directory and Windows systems. Back in Portugal he was doing implementation of different Microsoft technologies, like Active Directory, Exchange, SQL, TMG, Lync, etc.
                    <br> He holds the MCSE, MCSA, MCITP (SQL, Exchange, Lync) certifications.
                    <br>
                    <br>
                    <strong>Kevin Gargo</strong>
                    <br> Responsible for the
                    <a href="contact.html">Contact us</a> page.
                    <br> He works as a server systems administrator with the United Nations Multidimensional Integrated Stabilization mission in the Central African Republic (MINUSCA).
                    <br> With 12 years’ experience as a Server Systems Engineer, he is specialized in Server systems consolidation (Virtualization), Storage Area Networks (SAN) and Disaster Recovery and Business Continuity (DRBC) technologies, he served as a systems engineer with the United Nations for 7 years and during this period, I contributed in providing technical guidance on complex storage systems and also participated in the installation and configuration of three (3) tiers of enterprise storage backup solution for the Disaster Recovery and Business Continuity (DRBC) project in Entebbe Regional Support Center (RSCE), Uganda to support UN peacekeeping missions in the African region.
                    <br> He holds the MCSE and Hewlett Packard’s (HP) Blade Servers and Storage systems certifications.
                </td>
            </tr>

        </table>
    </div>
    <br>
    <br>
    <!-- This table has all the references that were used to develop this website by Joao-->
    <div id="ref">
        <p class="innertitle"> REFERENCES </p>
        <table id="tableref">
            <thead>
                <tr>
                    <td>Team Member</td>
                    <td>Item Referenced</td>
                    <td>Harvard Referencing System</td>
                </tr>
            </thead>
            <tbody>
                <!-- Formatting the title in italic for the Harvard referencing
                system. The links open in a new tab -->

                <!-- Code references -->
               <?php
               // MySQL Connection variables
                $dbserver = "laureatestudentserver.com";
                $dbname = "laureate_IN103";
                $username = "laureate_IN103";
                $password = "9ock4nyWV4XJ";
                //$port = 3306;
                //$socket = "";
                
                // Creating the database connection
                //$dbc = mysqli_connect($dbserver,$username,$password,$dbname,$port,$socket);
		$dbc = mysqli_connect($dbserver,$username,$password,$dbname);                

                // testing the database connection
                if (!$dbc) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                // query to get all existent records
                $query = "SELECT teammember, item, harvardref FROM treferences ORDER BY teammember, item";
                
                // passing the database records into a variable
                $results = $dbc->query($query);
                
                // counting the number of records returned; in this case it is only for redundancy
                $rows = mysqli_num_rows($results);
                if ($rows == 0)
                {
                    echo("<p> There are currently no records in the devices table</p>");
                }
                else {
                
                // loop through all the existent records and add them to the table
                foreach ($results as $references) :
                ?>
                <tr>
                    <td><?php echo $references['teammember']; ?></td>
                    <td><?php echo $references['item']; ?></td>
                    <td><?php echo $references['harvardref']; ?></td>
                </tr>
                <?php endforeach;
                }
                $dbc = null;?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <!-- Work Assignment By Fabien
-->
    <div>
        <h2 id="assign">WORK ASSIGNMENT</h2>
        <table class="table2">
            <tr class="tr2">
                <th class="th2">Team Member</th>
                <th class="th2">Home Page</th>
                <th class="th2">About</th>
                <th class="th2">Contact</th>
                <th class="th2">Content Men</th>
                <th class="th2">Content Women</th>
                <th class="th2">Shopping Cart</th>
                <th class="th2">CSS</th>
                <th class="th2">JavaScript</th>
		<th class="th2">PHP</th>
		<th class="th2">SQL</th>
                <th class="th2">User Management</th>
            </tr>
            <tr class="tr2">
                <td class="left">Fabien</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
		<td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2">X</td>
            </tr>
            <tr class="tr2">
                <td class="left">Kevin</td>
                <td class="td2"></td>
                <td class="td2"></td>
                <td class="td2">X</td>
                <td class="td2"></td>
                <td class="td2"></td>
                <td class="td2"></td>
                <td class="td2"></td>
                <td class="td2"></td>
		<td class="td2"></td>
                <td class="td2"></td>
                <td class="td2"></td>
            </tr>
            <tr class="tr2">
                <td class="left">Joao</td>
                <td class="td2"></td>
                <td class="td2">X</td>
                <td class="td2"></td>
                <td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2"></td>
                <td class="td2">X</td>
                <td class="td2">X</td>
		<td class="td2">X</td>
                <td class="td2">X</td>
                <td class="td2"></td>
            </tr>
        </table>
        	<div>
<?php include 'footer.php'; ?>
	</div>
    </div>
</body>

</html>
