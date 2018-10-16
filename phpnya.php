<?php 
$varA= $_POST['a'];
$varOF=$_POST['of'];
$varB= $_POST['b'];

if($varA!=0&&$varB!=0)
{
if($varOF=="+")
	{
		$hasil= $varA+$varB;
		echo "$varA + $varB=$hasil";
	}
	elseif ($varOF=="-") 
			{
				$hasil= $varA-$varB;
				echo "$varA - $varB=$hasil";
			}
			elseif ($varOF=="/")
					{
						$hasil= $varA/$varB;
						echo "$varA / $varB=$hasil";
					}
					elseif ($varOF=="*") 
							{
								$hasil= $varA*$varB;
								echo "$varA * $varB=$hasil";		
							}
}
else
{echo "data masih kosong.";}

 ?>