<?php
	$conditions='';
	$varcount=0;
	$newlines=0;
	$attributes = array('Name', 'Base', 'OSType', 'Category', 'Arch', 'Status', 'DefaultInterface', 'DE',
		'ReleasedYear', 'InstallSize', 'ReleaseModel', 'PackageManagement', 'InitSystem', 'ImageType');
	$heads = array('Name', 'Base', 'OS Type', 'Category', 'Architecture', 'Status', 'Default Interface',
		'Desktop Environment', 'Released Year', 'Install Size', 'Release Model', 'Package Management',
		'Init System', 'Image Type');
	if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  $_POST['default'] != null || $_POST['submit'] != null ){
		if($_POST['default'] == 'none'){
			$sql_query = "select * from DistroDB.Distroes;";
			$pretty_print = shell_exec("echo \"$sql_query\" | pygmentize -l mysql -f html");
			echo "<h2> Query </h2>";
			echo "<div class=\"code\"> $pretty_print </div>";
			echo '<br/><br/><br/><center><h1> Result </h1><table><tr>';
			foreach ($heads as $head){
				echo "<th> $head </th>";
			}
			echo '</tr>';
			foreach ($connection->query("$sql_query") as $row){
				echo '<tr>';
				foreach ($attributes as $attr)
					if ($attr == 'Status' && $row["$attr"] == 1)
						echo '<td> Active </td>';
					else if ($attr == 'Status' && $row["$attr"] == 0)
						echo '<td> Dead </td>';
					else
						echo '<td>'.$row["$attr"].'</td>';
				echo '</tr>';
			}
			echo '</table>';
			echo '</center>';
		}else if ($_POST['submit'] == 'filter'){
			foreach ($attributes as $attr)
				if($_POST[strtolower($attr)] != null){
					$filters = $_POST[strtolower($attr)];
					foreach ($filters as $filter)
						if($filter == $filters[count($filters)-1]){
							$conditions .= "$attr='".$filter."') and (";
							$print_conditions .= "$attr='".$filter."') and \n(";
							$newline++;
						}else{
							$conditions .= "$attr='".$filter."' or ";
							$print_conditions .= "$attr='".$filter."' or ";
							if ($varcount >= 6){
								$varcount = 0;
								$print_conditions .= "\n ";
								$newline++;
							}else
								$varcount++;
						}
				}
			$query = "Select * from DistroDB.Distroes where ($conditions;";
			$query_print = "Select * from DistroDB.Distroes where\n($print_conditions;";
			$sql_query = str_replace(') and (;',');',$query);
			$sql_query_print = str_replace(") and \n(;",');',$query_print);
			$sql_query_count = str_replace('*','count(*) as totalcount',$sql_query);
			echo "<h2> Query </h2>";
			$pretty_print = shell_exec("echo \"$sql_query_print\" | pygmentize -l mysql -f html");
			echo "<div class=\"code\"> $pretty_print </div>";
			if ($sql_query != 'Select * from DistroDB.Distroes where (;'){
				foreach ($connection->query($sql_query_count) as $row)
				$totalcount = $row['totalcount'];
			}
			if ($sql_query == 'Select * from DistroDB.Distroes where (;'){
				echo "<br/><br/><br/><center><h1> Result <br/><br/> NULL </h1></center>";
			}else if ($totalcount == 0){
				for($i=0; $i<$newline; $i++)
					echo "<br/>";
				echo "<br/><br/><br/><center><h1> Result <br/><br/> NULL </h1></center>";
			}else{
				for($i=0; $i<$newline; $i++)
					echo "<br/>";
				echo '<br/><br/><br/><center><table>';
				echo '<tr colspan=\"14\"><center><h1> Result </h1></center></tr>';
				echo '<tr>';
				foreach ($heads as $head){
					echo "<th> $head </th>";
				}
				echo '</tr>';
				foreach ($connection->query($sql_query) as $row){
					echo '<tr>';
					foreach ($attributes as $attr)
						if ($attr == 'Status' && $row["$attr"] == 1)
							echo '<td> Active </td>';
						else if ($attr == 'Status' && $row["$attr"] == 0)
							echo '<td> Dead </td>';
						else
							echo '<td>'.$row["$attr"].'</td>';
					echo '</tr>';
				}
				echo '</table></center>';
			}
		}
	}
?>
