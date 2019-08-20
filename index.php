<!DOCTYPE html>
<html>
<head>
<title>My Quiz</title>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>


 <link rel="stylesheet" type="text/css" href="css/main.css">
<?php
error_reporting(0);


$title = "Take My Quiz";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization


$a = array(
1 => array(
   0 => " PHP stands for?",
   1 => "protect hail paverts",
   2 => "Primative hyper processor",
   3 => " PHP: Hypertext Preprocessor",
   4 => "podcast hail perm",
   5 => "none of the above",
   6 => 3
),
2 => array(
   0 => "founder of Facebook is..",
   1 => "Mark Zuberg",
   2 => "Bill gates",
   3 => "Gearge bush",
   4 => "Hail Silass",
   5 => "Dispney",
   6 => 1
),
3 => array(
   0 => "Cybersecurity is a ",
   1 => "Hacking",
   2 => " security is the protection of computer systems from the theft of or damage to their hardware, software, or electronic data, as well as from the disruption or misdirection of the services they provide",
   3 => "hardware",
   4 => "software",
   5 => "non of the above",
   6 => 2
),
4 => array(
   0 => "what is internet",
   1 => "3 and 4",
   2 => "url",
   3 => "search engine",
   4 => "world wide web",
   5 => "The Internet (portmanteau of interconnected network) is the global system of interconnected computer networks that use the Internet protocol suite (TCP/IP) to ...",
   6 => 5
),
5 => array(
   0 => "what is a developer?",
   1 => "Someone who likes computers",
   2 => "a person tha fixes computers",
   3 => "A developer is an individual that builds and create software and applications",
   4 => "a computer programm",
   5 => "All of the above",
   6 => 3
),
6 => array(
   0 => "Type of an array",
   1 => "Indexed arrays",
   2 => "bottom arrays",
   3 => "top arrays",
   4 => "to do arrays",
   5 => "end of arrays",
   6 => 1
),
7 => array(
   0 => "Electric shock",
   1 => "electricity in water",
   2 => "flow of current",
   3 => "2 and 5",
   4 => "none",
   5 => "a sudden discharge of electricity through a part of the body.",
   6 => 5
),
8 => array(
   0 => "Gmail is used for",
   1 => "Sending messages",
   2 => "Gmail uses labels to help you organize with more flexibility. A conversation can have several labels, so you're not forced to choose one particular folder for messages. You can also create filters to automatically manage incoming mail. Starring messages is another way you can organize your inbox.",
   3 => "creating profiles",
   4 => "making documents",
   5 => "non of the above",
   6 => 2
),
9 => array(
   0 => "PC stands for ?",
   1 => "Print copies",
   2 => "photo edit computers",
   3 => "pave cop",
   4 => "a personal computer.",
   5 => "please come",
   6 => 4
),
10 => array(
   0 => "CSS stands for?",
   1 => "computer stands system",
   2 => "CS Stand",
   3 => "Cascading Style Sheets",
   4 => "Cascading Style Shows",
   5 => "All of the above",
   6 => 3
),
11 => array(
   0 => "what is a local machine?",
   1 => "a work machine",
   2 => "The term local machine refers to the computer that a user is currently using on a computer network",
   3 => "machine in the local",
   4 => "machine that is found around",
   5 => "a tv",
   6 => 2
),
12 => array(
   0 => "The use of IP address",
   1 => "To know your physical address",
   2 => "An IP address lookup will determine the geolocation of any IP address. The results of the IP address lookup will show you the city, state/region, postal/zip code, country name, ISP, and time zone. ... Your IP Location can be found using our IP Lookup tool",
   3 => "To track time.",
   4 => "Geographic location",
   5 => "All of the Above",
   6 => 2
),
13 => array(
   0 => "What is JavaScript?",
   1 => "JavaScript is the Programming Language for the Web. JavaScript can update and change both HTML and CSS",
   2 => "hyperText markup",
   3 => "spraedsheet",
   4 => "wordpress",
   5 => "image",
   6 => 1
),
14 => array(
   0 => "what is GitHub",
   1 => "Internet hub",
   2 => "Users Hub",
   3 => "GitHub is where people build software",
   4 => "community",
   5 => "internet community users",
   6 => 3
),
15 => array(
   0 => "what is mySql",
   1 => "server side",
   2 => "a color code",
   3 => "Built on MySQL Enterprise Edition and powered by the Oracle Cloud, Oracle MySQL Cloud Service provides a simple, automated, integrated and enterprise ...",
   4 => "a robot",
   5 => "a wire",
   6 => 3
),
16 => array(
   0 => "what is workforce?",
   1 => "computers",
   2 => "local area",
   3 => "the people engaged in or available for work, either in a country or area or in a particular firm or industry.",
   4 => "zombies at work",
   5 => "people who like to work",
   6 => 3
),
17 => array(
   0 => "LAN stand for",
   1 => "low and nasty",
   2 => "A local-area network (LAN) is a computer network that spans a relatively small area",
   3 => "log in and navigate",
   4 => "last and nasted",
   5 => "list all navigation",
   6 => 2
),
18 => array(
   0 => "what is a WAN",
   1 => "wide are Nertwork",
   2 => " lacking enthusiasm or energy.",
   3 => "wanders",
   4 => "wavaring",
   5 => "wall",
   6 => 1
),
19 => array(
   0 => "How old is internet",
   1 => ".  it turns 28 in 2014",
   2 => ". it turns 28 in 2011",
   3 => ".  it turns 28 in 2012",
   4 => ".  it turns 28 in 2019",
   5 => " turns 28 in 2017",
   6 => 5
),
20 => array(
   0 => "what is interface",
   1 => "a point where two systems, subjects, organizations, etc. meet and interact",
   2 => "internet",
   3 => "software",
   4 => "lossy code",
   5 => "dry code",
   6 => 1
),
);

$max=20;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
?>

<HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>

<SCRIPT LANGUAGE='JavaScript'>
<!-- 
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}
// -->
</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR>Percentaje of correct responses: <?php print $percentaje; ?> %
<BR><input type=submit value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>
<BR>     <input type=text name=response size=8>


</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
The Quiz has finished
<BR>Percentaje of correct responses: <?php print $percentaje ; ?> %
<p><A HREF="<?php print $address; ?>">Home Page</a>

<?php } ?>

</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>