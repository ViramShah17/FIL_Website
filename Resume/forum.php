 
<?php

    $servername = "dbserver.engr.scu.edu";
    $username = "classall";
    $password = "00000944414";
    $dbname = "sdb_classall";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if (!$con){
	die('Could not connect: ' . mysqli_connect_errno());
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

$sql="SELECT DateStamp,FirstName,LastName,PostTitle,PostContent FROM FILFinal_Forum";
$result = mysqli_query($con,$sql);

echo "<div class='wrapper'>";
echo "<h1>FIL Forum</h1>";

while($row = mysqli_fetch_array($result))
{
echo "<h2>" . $row['PostTitle'] . "</h2>";
echo "<p>" . $row['DateStamp'] . " | posted by ". $row['FirstName'] ." ".$row['LastName'] ."</p>";
echo "<h4>" . $row['PostContent'] . "</h4>";
echo "<hr>";
}

echo "<br/><br/>"."<big><big><a href='post_to_forum.html' style='color:blue' >Click here to make a post to this forum!</a></big></big>";

echo "</div>";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}


mysqli_close($con);
?>