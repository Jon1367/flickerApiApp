
<?

// for looop to loop threw the Data
// $par2 is the second parameter you send to the view that holds the information from the api call

// loops threw all the images you search for 
for ($i=0; $i <= count($par2['photos']['photo']); $i++) { 
	# code...
	//var_dump($par2['photos']['photo'][$i]);
?>
<!--   drilling into api to get the image url to display image -->
<img src="https://farm<?echo $par2['photos']['photo'][$i]['farm'] ?>.staticflickr.com/<? echo $par2['photos']['photo'][$i]['server'] ?>/<?echo $par2['photos']['photo'][$i]['id'] ?>_<?echo $par2['photos']['photo'][$i]['secret'] ?>_m.jpg" alt=""/>
<?

		# code...
	}
?>
