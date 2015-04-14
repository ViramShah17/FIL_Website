<?php
    $servername = "dbserver.engr.scu.edu";
    $username = "classall";
    $password = "00000944414";
    $dbname = "sdb_classall";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if (!$con){
	die('Could not connect: ' . mysqli_connect_errno());
    }

$todaydate=date("M d Y H:i:s");
$sql="INSERT INTO FILFinal_Forum (DateStamp, FirstName, LastName, Email, PostTitle, PostContent)
VALUES
('$todaydate','$_POST[FirstName]','$_POST[LastName]','$_POST[Email]','$_POST[PostTitle]','$_POST[PostContent]')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

echo "<link rel='stylesheet' type='text/css' media='screen' href='../Styles/style.css'>";
echo "<div id='navigation'>";
echo "<a href='../Home/index.html' style='float:left;'><img src='../Images/logo_white.png' style='width:200px;'></a>";
echo "<a href='../Resume/studentresume.html'>resumes</a>";
echo "<a href='../Proposals/project_proposal.html'>proposals</a>";
echo "<a href='../Forum/post_to_forum.html'>forum</a>";
echo "<a href='../Donations/donations.html'>donate</a>";
echo "<a href='../Team/team.html'>the team</a>";
echo "<a href='../Projects/projects.xml'>projects</a>";
echo "<a href='../Home/index.html'>home</a>";
echo "</div>";

echo "<div class='wrapper'><h1>Thank you for posting to the FIL Forum!</h1><br/>";
echo "<big><big><a href='forum.php' style='color:blue'>Click here to see the forum!</a></big></big>
";

mysqli_close($con)
?>