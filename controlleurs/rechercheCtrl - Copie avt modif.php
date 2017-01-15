




<?php
	require "pdo.php";
	$recherche=htmlspecialchars($_POST['recherche']);
		if (isset($_POST['release']) and !isset($_POST['process'])) {
			$req = $bdd->query('SELECT * FROM detainees WHERE released=1 AND ( idc_number LIKE "%'.$recherche.'%" OR name LIKE "%'.$recherche.'%" OR country LIKE "%'.$recherche.'%" ) ORDER BY name');
		}elseif (!isset($_POST['release']) and isset($_POST['process'])) {
			$req = $bdd->query('SELECT * FROM detainees WHERE released=0 AND ( idc_number LIKE "%'.$recherche.'%" OR name LIKE "%'.$recherche.'%" OR country LIKE "%'.$recherche.'%" ) ORDER BY name');
		}else{
			$req = $bdd->query('SELECT * FROM detainees WHERE idc_number LIKE "%'.$recherche.'%" OR name LIKE "%'.$recherche.'%" OR country LIKE "%'.$recherche.'%" ORDER BY name');
		}
	$req=$req->fetchAll();
	$count=count($req);
	reset($req);
	$a=0;?>
	<p style="font-size:1.5em">There is <span style="font-size:2em"><?= $count ?></span> results</p>
	<?php 
	echo '<div class="row" style="font-weight:bold;text-align:center"><div class="col s1">IDC NUMBER</div><div class="col s4">NAME</div><div class="col s1">AGE</div><div class="col s1">GENDER</div><div class="col s1">PASSPORT</div><div class="col s2">COUNTRY</div><div class="col s2">ARRESTED DAY</div></div>';

		foreach ($req as $reponse){
			if($reponse['released']==1){$r="0";}else{$r='';}
			$arrest=$reponse['arrested'];
			if ($arrest=='0000-00-00') {
				$arrest=date('Y-m-d');
			}$arrest=new Datetime($arrest);$arrest=$arrest->format('d-m-Y');
			echo '<a href="information.php?idc_number='.$reponse['idc_number'].'&year='.$reponse['year'].'" style="color:black">
					<div class="row" style="text-align:center">
						<div class="inline1'.$r.' col s1">'.$reponse['idc_number'].'</div>
						<div class="inline'.$r.' col s4">'.$reponse['name'].'</div>
						<div class="inline1'.$r.' col s1">'.$reponse['age'].'</div>
						<div class="inline'.$r.' col s1">'.$reponse['gender'].'</div>
						<div class="inline1'.$r.' col s1">'.$reponse['passport'].'</div>
						<div class="inline'.$r.' col s2">'.$reponse['country'].'</div>
						<div class="inline1'.$r.' col s2">'.$arrest.'</div>
					</div>
				</a>';
			$a++;
		}
	if ($a==0) {
		echo '<p class="flow-text center">Nobody wasn\'t found</p>' ;
	}
?>

