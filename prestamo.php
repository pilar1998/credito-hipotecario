<?php 
	$vp=$_POST['vp'];
	$casa=$_POST['casa'];
	$plazo=$_POST['plazo'];
	$base=10;
	$con=0;
	for($i=105000000;$i<340000000;$i=$i+23500000){		
		if($casa>$i && $casa<($i+23500000)){
			$con2=$con/10;
			$ip=2-$con2;
		}
		$con=$con+2;
	}
	$cuotas=$plazo*12;
	$ea=$ip+$base;
	$em=((pow((1+($ea/100)),(1/12))-1))*100;
	$valor_cuota=round(($vp)*((pow((1+($em/100)),($cuotas))*($em/100)))/(pow((1+($em/100)),($cuotas))-1),3);
	echo "<table class='table table-striped table-bordered table-condensed table-hover'>";            
        echo "<thead>";
        	echo "<th>Cuota #</th>";
            echo "<th>Valor Cuota</th>";
            echo "<th>Intereses</th>";
            echo "<th>Amortización</th>";
            echo "<th>Saldo</th>";
        echo "</thead>";
    $saldo[0]=$vp;
    echo "<tr>";
       		echo "<td>";
            echo 0;
            echo "</td>";
            echo "<td>";
            echo 0;
            echo "</td>";
            echo "<td>";
            echo 0;
            echo "</td>";     
            echo "<td>";
            echo 0;
            echo "</td>";
            echo "<td>";
            echo $saldo[0];
            echo "</td>";            
        echo "</tr>";
	for($i=1;$i<=$cuotas;$i++){
		 echo "<tr>";
       		echo "<td>";
            echo $i;
            echo "</td>";
            echo "<td>";
            echo $valor_cuota;
            echo "</td>";
            echo "<td>";
            echo $intereses=round(($saldo[$i-1]*($em/100)),3);
            echo "</td>";     
            echo "<td>";
            echo $amort=round(($valor_cuota-$intereses),3);
            echo "</td>";
            echo "<td>";
            echo $saldo[$i]=round(($saldo[$i-1]-$amort),3);
            echo "</td>";            
        echo "</tr>";
	}
	

?>