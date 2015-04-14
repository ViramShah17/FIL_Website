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

$disciplines = implode(', ', $_POST['Disciplines']);
$hear = implode(', ', $_POST['Hear']);

$sql="INSERT INTO FILFinal_ProjectProposal (DateStamp, FirstName, LastName,
Email, Website, Title, ProjectTitle, Category, ProjectIdea, Partners, Outcome, Timeline, Commitment,
 Immersion, Disciplines, Funding, IntellectualProperty, Hear, Notes)
VALUES
('$todaydate','$_POST[FirstName]','$_POST[LastName]','$_POST[Email]','$_POST[Website]',
'$_POST[Title]', '$_POST[ProjectTitle]', '$_POST[Category]', '$_POST[ProjectIdea]', '$_POST[Partners]',
'$_POST[Outcome]', '$_POST[Timeline]', '$_POST[Commitment]', '$_POST[Immersion]', '" . $disciplines . "', 
'$_POST[Funding]', '$_POST[IntellectualProperty]', '" . $hear . "', '$_POST[Notes]')";



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

echo "<div class='wrapper'><h1>Thank you for your project proposal!</h1><br/>";
echo "<a style='text-decoration:none' href='project_proposal.html'>Click here to
submit another one!</a></div>";

mysqli_close($con)
?>