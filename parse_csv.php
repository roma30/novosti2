<?php require_once('templates/top.php');
require_once("config/config.php"); 
  require_once ("class/Database.php"); 

if($_SESSION['id']){
	?><form method="post" enctype='multipart/form-data'>
	  <div class="form-group1">
		<label for="exampleInputFile">Прикрепить файл</label>
		<input type="file" id="exampleInputFile" name="parse">
		</div>
		<br>	
		<button type="submit" class="btn btn-default">Загрузка</button>
		</form><?
		if($_FILES){
			$tmp_name=$_FILES['parse']['tmp_name'];
			$name=$_FILES['parse']['name'];
			$dir=$_SERVER['DOCUMENT_ROOT'].'/media/uploaded/prices/';
				if(is_uploaded_file($tmp_name)){
						move_uploaded_file($tmp_name,$dir.$name);
						echo '<hr/>';
						echo 'файл загружен';
						echo '<hr/>';
						echo "файл открыт для чтения  " .$name;
						echo '<hr/>';
				$handle=fopen($dir.$name,'r');
				$data=array();
				$k=0;
				while(!feof($handle)){
				$data[$k]=fgetcsv($handle,1000,';');
				$k++;
				}
				/*   echo '<pre>';
				print_r($data);
				echo '</pre>'; */  
				unset($data[0]);
				foreach($data as $key=>$value){
			/* 	  print_r($value);
				echo $key;   */
				//$array_value=explode(';',$value[0]);
		 
				$vv0=$value[0];//название
				$vv1=$value[1];//описание
				$vv2=$value[2];//цена
				$vv3=$value[3];//категория
				/*   echo $vv0;
				echo $vv1;
				echo $vv2;
				echo $vv3;   */
				echo '<hr/>';
					
					$database = new Database();
					$query="SELECT * FROM categoria where name='".$vv3."'";
					$database->query($query);
					$categ=$database->single();
					
	if(isset($categ['id'])){				
					
					$database = new Database();
					$query="SELECT * FROM prices where vv0='".$vv0."'";
					$database->query($query);
					$rows = $database->single();
					
				if(isset($rows['id'])){
					$database = new Database();
					$query="UPDATE prices SET user_id='".$_SESSION['id']."', vv0='$vv0', vv1 = '$vv1', vv2 = '$vv2', vv3 = '$vv3' WHERE id=".$rows['id']."";
					$database->query($query);
					$database->execute();
					echo "<span style='color:yellow'>UPDATE $vv0</span><br />";
					
				}else{
						$database = new Database();
						$query = "INSERT INTO prices VALUES (NULL,:user_id,:vv0,:vv1,:vv2,:vv3)";
						$database->query($query);
						$database->bind(':user_id', $_SESSION['id']);
						$database->bind(':vv0', $vv0);
						$database->bind(':vv1', $vv1);
						$database->bind(':vv2', $vv2);
						$database->bind(':vv3', $vv3);	
						$database->execute();
						echo "<span style='color:green'>INSERT  $vv0</span><br />";
					}
			}else{
			echo 'нет такой категории';
				}
			}
				}else{
							echo 'ошибка загрузки файла';
							}	
		}

	}else{
		echo 'ошибка входа';
	}



require_once("templates/bottom.php");?>