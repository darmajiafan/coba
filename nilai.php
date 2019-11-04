<?php
	
	function data($data)
	{
		if ($data >= 75)
		{
			echo "Lulus Nilai A";
		}
		elseif ($data >=60) 
		{
			echo "Lulus Nilai B";
		}

		elseif ($data >=50) 
		{
			echo "Lulus nilai C";
		}
		else
		{
			echo "maaf anda tidak lulus";
		}
	}

	$nilai=40;

	$hasil=data($nilai);

	echo $hasil;
?>