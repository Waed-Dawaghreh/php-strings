<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <?php
       
       $nav = array("Home", "About", "contact us", "Hello Class A");

        $ulList ="<ul class='navbar-nav'>";
        foreach($nav as $insert){
            $ulList .="<li class='nav-item'>
            <a class='nav-link' >$insert</a></li>";
        }
        $ulList .="</ul>";

        echo $ulList;
    ?>


    
    </div>
  </div>
</nav>

<?php
echo "<br>";
// Question #1
//A
echo "Question #1 Part A";
echo "<br>";

$str1ToUpper=strtoupper("hello all");
echo "$str1ToUpper";
echo "<br>";
//B
echo "Question #1 Part B";

echo "<br>";
echo strtolower("Hello WORLD.");
echo "<br>";
//C
echo "<br>";
echo "Question #1 Part C";
echo "<br>";
echo ucfirst("hello world!");
echo "<br>";
echo "<br>";
echo "Question #1 Part D";
echo "<br>";
//D
echo ucwords("hello world");
echo "<br>";

echo "<br>";
echo "Question #2";
echo "<br>";
//Question #2
$strQ2=substr(chunk_split('082307', 2, ':'), 0, -1);
echo "$strQ2";
echo "<br>";

echo "<br>";
echo "Question #3";
echo "<br>";

//Question #3 
$strQ3='The quick brown fox jumps over the lazy dog.';
  if(stristr($strQ3, 'jumps') === FALSE) {
    echo '"jumps" not found in string';
    echo "<br>";
  }else {
    echo '"jumps" found in string';
    echo "<br>";
  }

  echo "<br>";
echo "Question #4";
echo "<br>";
  //Question #4
$strQ4 ='www.example.com/public_html/index.php';
$strQ4=substr(strrchr($strQ4, "/"), 1);
echo "$strQ4";
echo "<br>";

echo "<br>";
echo "Question #5";
echo "<br>";
//Question #5
$strQ5 ='Orange@example.com';
$strQ5answer=strstr($strQ5, '@', true);
echo "$strQ5answer";
echo "<br>";

echo "<br>";
echo "Question #6";
echo "<br>";
//Question #6
$strQ6= substr($strQ5, -3);
echo "$strQ6";
echo "<br>";

echo "<br>";
echo "Question #7";
echo "<br>";
//Question #7
$strQ7='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo (substr(str_shuffle($strQ7), 0,9))."<br>";

echo "<br>";
echo "Question #8";
echo "<br>";
//Question #8
$strQ8='the quick brown fox jumps over the lazy dog.';
$strQ8answer=preg_replace('/the/', 'That', $strQ8, 1);
echo($strQ8answer)."<br>";

echo "<br>";
echo "Question #9";
echo "<br>";
//Question #9
$strQ9part1= 'football';
$strQ9part2='footboll';
$strQ9answer = strspn($strQ9part1 ^ $strQ9part2, "\0");
printf('First difference between %s and %s at position %d: "%s" vs "%s"',$strQ9part1,$strQ9part2,$strQ9answer, $strQ9part1[$strQ9answer], $strQ9part2[$strQ9answer]);
echo "<br>";

echo "<br>";
echo "Question #10";
echo "<br>";
//Question #10
$strQ10 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$array = explode("<br>", $strQ10);
echo(var_dump($array));
echo "<br>";

echo "<br>";
echo "Question #11";
echo "<br>";
//Question #11
$cha = 'a';
$next_cha = ++$cha; 

if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo "<br>";

echo "<br>";
echo "Question #12";
echo "<br>";
//Question #12
$strQ12='orange@example.com';
$sub_string = 'orange@';
if (substr($strQ12, 0, strlen($sub_string)) == $sub_string) 
{
 $strQ12 = substr($strQ12, strlen($sub_string));
}
echo $strQ12;
echo "<br>";

echo "<br>";
echo "Question #13";
echo "<br>";
//Question #13
$strQ13='The brown fox';
$addedString ='quick';
$newString = substr_replace($strQ13, $addedString.' ', 4, 0);
echo $newString;
echo "<br>";

echo "<br>";
echo "Question #14";
echo "<br>";
//Question #14
$strQ14 = explode(' ',trim($newString));
echo $strQ14[0];
echo "<br>";

echo "<br>";
echo "Question #15";
echo "<br>";
//Question #15
$strQ15='000547023.24';
echo (ltrim($strQ15, '0'));
echo "<br>";

echo "<br>";
echo "Question #16";
echo "<br>";
//Question #16
$strQ16='The quick brown fox jumps over the lazy dog';
echo (str_replace("fox", " ", $strQ16));
echo "<br>";

echo "<br>";
echo "Question #17";
echo "<br>";
//Question #17
$strQ17='The quick brown fox jumps over the lazy dog///';
echo(rtrim($strQ17, '/'));
echo "<br>";

echo "<br>";
echo "Question #18";
echo "<br>";
//Question #18
$strQ18= 'http://www.example.com/5478631';
echo(substr($strQ18, strrpos($strQ18, '/' )+1));
echo "<br>";

echo "<br>";
echo "Question #19";
echo "<br>";
//Question #19
$strQ19=  '"\1+2/32:2-3/43';
echo(str_replace(str_split('\\/:*?"<>|+-'), ' ', $strQ19));
echo "<br>";

echo "<br>";
echo "Question #20";
echo "<br>";
//Question #20
$strQ20=  'The quick brown fox jumps over the lazy dog';
echo(implode(' ', array_slice(explode(' ', $strQ20), 0, 5)));
echo "<br>";

echo "<br>";
echo "Question #21";
echo "<br>";
//Question #21
$strQ21=  '2,543.12';
$result = str_replace( ',', '', $strQ21);
if( is_numeric($result))
  {
  echo $result;
  }
echo "<br>";

echo "<br>";
echo "Question #22";
echo "<br>";
//Question #22
for ($i = ord('a'); $i <= ord('z'); $i++)
echo chr($i);
echo "<br>";

?>
​

</body>
</html>