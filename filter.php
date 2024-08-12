<?php
	$conditions='';
	$attributes = array('Name', 'Base', 'OSType', 'Category', 'Arch', 'Status', 'DefaultInterface', 'DE',
		'ReleasedYear', 'InstallSize', 'ReleaseModel', 'PackageManagement', 'InitSystem', 'ImageType');
	$heads = array('Name', 'Base', 'OS Type', 'Category', 'Architecture', 'Status', 'Default Interface',
		'Desktop Environment', 'Released Year', 'Install Size', 'Release Model', 'Package Management',
		'Init System', 'Image Type');
	if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  $_POST['default'] != null || $_POST['submit'] != null ){
		if($_POST['default'] == 'none'){
			echo '<center>';
			echo '<table>';
			echo '<tr>';
			foreach ($heads as $head){
				echo "<th> $head </th>";
			}
			echo '</tr>';
			$query = "select * from DistroDB.Distroes";
			foreach ($connection->query("$query") as $row){
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
			if($_POST['base'] != null){
				$base=$_POST['base'];
				foreach ($base as $bases)
					if($bases == $base[count($base)-1])
						$conditions .= "Base='$bases') and (";
					else
						$conditions .= "Base='$bases' or ";
			}
			if($_POST['ostype'] != null){
				$ostype=$_POST['ostype'];
				foreach ($ostype as $ostypes)
					if($ostypes == $ostype[count($ostype)-1])
						$conditions .= "OSType='$ostypes') and (";
					else
						$conditions .= "OSType='$ostypes' or ";
			}
			if($_POST['category'] != null){
				$category=$_POST['category'];
				foreach ($category as $categorys)
					if($categorys == $category[count($category)-1])
						$conditions .= "Category='$categorys') and (";
					else
						$conditions .= "Category='$categorys' or ";
			}
			if($_POST['arch'] != null){
				$arch=$_POST['arch'];
				foreach ($arch as $archs)
					if($archs == $arch[count($arch)-1])
						$conditions .= "Arch='$archs') and (";
					else
						$conditions .= "Arch='$archs' or ";
			}
			if($_POST['status'] != null){
				$status=$_POST['status'];
				foreach ($status as $statuss)
					if($statuss == $status[count($status)-1])
						$conditions .= "Status='$statuss') and (";
					else
						$conditions .= "Status='$statuss' or ";
			}
			if($_POST['defaultinterface'] != null){
				$defaultinterface=$_POST['defaultinterface'];
				foreach ($defaultinterface as $defaultinterfaces)
					if($defaultinterfaces == $defaultinterface[count($defaultinterface)-1])
						$conditions .= "DefaultInterface='$defaultinterfaces') and (";
					else
						$conditions .= "DefaultInterface='$defaultinterfaces' or ";
			}
			if($_POST['de'] != null){
				$de=$_POST['de'];
				foreach ($de as $des)
					if($des == $de[count($de)-1])
						$conditions .= "DE='$des') and (";
					else
						$conditions .= "DE='$des' or ";
			}
			if($_POST['releasedyear'] != null){
				$releasedyear=$_POST['releasedyear'];
				foreach ($releasedyear as $releasedyears)
					if($releasedyears == $releasedyear[count($releasedyear)-1])
						$conditions .= "ReleasedYear='$releasedyears') and (";
					else
						$conditions .= "ReleasedYear='$releasedyears' or ";
			}
			if($_POST['installsize'] != null){
				$installsize=$_POST['installsize'];
				foreach ($installsize as $installsizes)
					if($installsizes == $installsize[count($installsize)-1])
						$conditions .= "InstallSize='$installsizes') and (";
					else
						$conditions .= "InstallSize='$installsizes' or ";
			}
			if($_POST['releasemodel'] != null){
				$releasemodel=$_POST['releasemodel'];
				foreach ($releasemodel as $releasemodels)
					if($releasemodels == $releasemodel[count($releasemodel)-1])
						$conditions .= "ReleaseModel='$releasemodels') and (";
					else
						$conditions .= "ReleaseModel='$releasemodels' or ";
			}
			if($_POST['packagemanagement'] != null){
				$packagemanagement=$_POST['packagemanagement'];
				foreach ($packagemanagement as $packagemanagements)
					if($packagemanagements == $packagemanagement[count($packagemanagement)-1])
						$conditions .= "PackageManagement='$packagemanagements') and (";
					else
						$conditions .= "PackageManagement='$packagemanagements' or ";
			}
			if($_POST['initsystem'] != null){
				$initsystem=$_POST['initsystem'];
				foreach ($initsystem as $initsystems)
					if($initsystems == $initsystem[count($initsystem)-1])
						$conditions .= "InitSystem='$initsystems') and (";
					else
						$conditions .= "InitSystem='$initsystems' or ";
			}
			if($_POST['imagetype'] != null){
				$imagetype=$_POST['imagetype'];
				foreach ($imagetype as $imagetypes)
					if($imagetypes == $imagetype[count($imagetype)-1])
						$conditions .= "ImageType='$imagetypes') and (";
					else
						$conditions .= "ImageType='$imagetypes' or ";
			}
			$query = "Select * from DistroDB.Distroes where ($conditions;";
			$sql_query = str_replace(') and (;',');',$query);
			$sql_query_count = str_replace('*','count(*) as totalcount',$sql_query);
			echo "<h2> Query </h2>";
			echo "<span><div class=\"code\"> $sql_query </div></span><br/><br/>";
			if ($sql_query != 'Select * from DistroDB.Distroes where (;'){
				foreach ($connection->query($sql_query_count) as $row)
				$totalcount = $row['totalcount'];
			}
			if ($sql_query == 'Select * from DistroDB.Distroes where (;'){
				echo "<center><h1> Result <br/><br/> NULL </h1></center>";
			}else if ($totalcount == 0){
				echo "<center><h1> Result <br/><br/> NULL </h1></center>";
			}else{
				echo '<center><table>';
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
