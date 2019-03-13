<?php 
if($_GET['what']=='bangladesh')
{$names=array ('Dhaka','Chittagong','Khulna','Barisal',);
	echo getHTML($names);
	}
else if($_GET['what']=='india')
{$names=array ('Mumbai','Delhi','Bengolore','Hyderabad',);
	echo getHTML($names);
	}
else if($_GET['what']=='pakistan')
{$names=array ('Karachi','Lahore','Faisalabad','Rawalpindi',);
	echo getHTML($names);
	}
else if($_GET['what']=='nepal')
{$names=array ('Kathmandu','Kaski','Lalitpur','Chitwan',);
	echo getHTML($names);
	}			
	
	function getHTML ($names)
	{$strResult='<ul>';
	for ($i=0; $i<count($names);$i++)
	{
		$strResult.='<li>'.$names[$i].'</li>';
		}
		$strResult.='</ul>';
		return $strResult;
		}

?>