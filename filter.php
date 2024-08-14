<?php
	$conditions='';
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
			foreach ($heads as $head)
				echo "<th> $head </th>";
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
			echo '</table></center>';
		}else if ($_POST['submit'] == 'filter'){
			foreach ($attributes as $attr)
				if($_POST[strtolower($attr)] != null){
					$filters = $_POST[strtolower($attr)];
					foreach ($filters as $filter)
						if($filter == $filters[count($filters)-1])
							$conditions .= "$attr='".$filter."') and (";
						else
							$conditions .= "$attr='".$filter."' or ";
				}

			$query = "Select * from DistroDB.Distroes where ($conditions);";
			$sql_query = str_replace(') and ();',');',$query);
			$sql_query_count = str_replace('*','count(*) as totalcount',$sql_query);

			echo "<h2> Query </h2>";
			$sed_cmd = "sed 's/ or / or\\n\\t/g; s/where (/where (\\n\\t/g; s/) and (/\\n) and (\\n\\t/g;";
			$sed_cmd = $sed_cmd." s/);/\\n);/g;'";
			$shell_cmd = "echo \"$sql_query\" | $sed_cmd | pygmentize -l mysql -f html";

			if ($sql_query != 'Select * from DistroDB.Distroes where ();')
				foreach ($connection->query($sql_query_count) as $row)
					$totalcount = $row['totalcount'];
			else
				$shell_cmd = "echo \"$sql_query\" | pygmentize -l mysql -f html";

			$pretty_print = shell_exec($shell_cmd);
			$newline = shell_exec("$shell_cmd | wc -l");
			echo "<div class=\"code\"> $pretty_print </div>";

			if ($sql_query == 'Select * from DistroDB.Distroes where ();'){
				echo "<br/><br/><br/><br/><br/><center><h1> Result <br/><br/> NULL </h1></center>";
			}else if ($totalcount == 0){
				for($i=0; $i<$newline; $i++)
					echo "<br/>";
				echo "<br/><center><h1> Result <br/><br/> NULL </h1></center>";
			}else{
				for($i=0; $i<$newline; $i++)
					echo "<br/>";

				echo '<br/><center><table>';
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
