<?php
$servername="localhost";
$username="root";
$password="coen161";
$dbname="fil_proj";

$con = mysqli_connect($servername,$username,$password,$dbname);

if (!$con)
{
die('Could not connect: ' . mysqli_connect_errno());
}

$todaydate=date("M d Y H:i:s");
$sql="INSERT INTO Donations (FirstName, LastName, Email, Level, DonationDate)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[level]','$todaydate')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

echo "<link rel='stylesheet' type='text/css' media='screen' href='Styles/style.css'>";
echo "<div id="navigation">";
echo "<a href="Home/index.html" style="float:left;"><img src="Images/logo_white.png" style="width:200px;"></a>
";
echo "<a href="Resume/studentresume.html">resumes</a>";
echo "<a href="Proposals/project_proposal.html">proposals</a>";
echo "<a href="Forum/forum.php">forum</a>";
echo "<a href="Donations/donations.html">donate</a>";
echo "<a href="Team/team.html">the team</a>";
echo "<a href="Projects/projects.xml">projects</a>";
echo "<a href="Home/index.html">home</a>";
echo "</div>";

echo "<div class='wrapper'><h1>Thank you for donating to Frugal Innovation Lab!</h1><br/>";
echo "<h3><a style='text-decoration:none' href='donations.html'>Click here to donate again!</a></h3></div>";

mysqli_close($con)
?>