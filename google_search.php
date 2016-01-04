 <?php require_once("libs/phpQuery/phpQuery/phpQuery.php");
	require_once("config/config.php"); 
require_once ("class/Database.php"); 
sleep(3);
//echo 'test';
$database = new Database();
$query="SELECT * FROM statias WHERE file_foto=''";
$database->query($query);
$ris = $database->resultset();
foreach($ris as $one=>$value){
$str=ereg_replace(" ","+",$value['name_categoria']);
echo 'название картинок:'.$value['name_categoria'].'<br/>';
$url="http://www.google.by/search?q=$str&source=lnms&tbm=isch&sa=X&ved=0ahUKEwic5IfXzo_KAhXCvXIKHcaeA2YQ_AUIBygB&biw=1280&bih=913";
echo $url.'<br/>';
$hub=file_get_contents($url);
$document=phpQuery::newDocument($hub);
$hentry=$document->find('.images_table img:eq(0)')->attr('src');
echo $hentry;
echo "<hr/>";
sleep(1);
$dir='media/uploaded/'.$value['user_id'].'/';
$name=time().'.jpg';
if(!copy($hentry,$dir.$name)){
echo "<span class='red'>ошибка копирования $hentry</span>";
}
$database = new Database();
$query="UPDATE statias SET file_foto='".trim($name)."' WHERE id='".$value['id']."'";
$database->query($query);
$database->execute();

}




?>
 
