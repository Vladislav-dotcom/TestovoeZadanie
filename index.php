<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<title>Тестовое задание</title>
		<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	</head>
	<body>
		<script src="script.js"></script>
		<?php
			class CProducts {

				public function OutputProducts(int $q) {
					$link = mysqli_connect(localhost, mysql, mysql, testzad)
			    		or die("Ошибка " . mysqli_error($link)); 
					$query = "SELECT * FROM Products ORDER BY DATE_CREATE DESC"; 
					 
					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

					if($result)
					{    
					    echo "<table><tr><th class='tableth'>ID</th>
					    <th class='tableth'>PRODUCT_ID</th>
					    <th class='tableth'>PRODUCT_NAME</th>
					    <th class='tableth'>PRODUCT_PRICE</th>
					    <th class='tableth'>PRODUCT_ARTICLE</th>
					    <th class='tableth'>PRODUCT_QUANTITY</th>
					    <th class='tableth'>DATE_CREATE</th></tr>";
					    for ($i = 0 ; $i < $q ; ++$i)
					    {
					        $row = mysqli_fetch_row($result);
					        $id = $row[0];
					        if($row[7] != 1) {
						        echo "<tr id='tr$i'>";
						            for ($j = 0 ; $j < 7 ; ++$j) {
						            	if($j != 5) {
						            		echo "<td class='tabletd'>$row[$j]</td>";
						            	} else {
						            		echo "<td class='tabletd' id='td$i'><input type='button' value='-' class='btnplusminus' onclick='minusButtonClick($i, $id, $row[$j])'> $row[$j]
						            		<input type='button' value='+' class='btnplusminus' onclick='plusButtonClick($i, $id, $row[$j])'>
						            		</td>";
						            	}
						            }
						        echo "<td><input type='button' value='Скрыть' class='btnhide' onclick='hideButtonClick($i, $id)'></td></tr>";
						    }
					    }
					    echo "</table>";
					     

					    mysqli_free_result($result);
					}
				}
			}

			$cprd = new CProducts();
			echo $cprd->OutputProducts(6), PHP_EOL;
		?>
	</body>
</html>