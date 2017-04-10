<?php
//phpinfo();
set_time_limit (0);
include('simple_html_dom.php');
$dirs = array_filter(glob('parfum/*'), 'is_dir');

foreach($dirs as $dir)
{
	$files = scandir($dir);
	foreach($files as $file)
	{
		if (strpos($file, '.html') !== false)
		{
    $html = file_get_html($dir.'/'.$file);

			if(empty($html)!=true && $html->find("#prettyPhotoGallery", 0)->children(0)->children(1)!=null && $html->find("#prettyPhotoGallery", 0)->children(0)->children(1)->children(1)!=null)
			{

				//echo $html->find('h1',0)->plaintext.'<br />';
				////echo $html->find("#prettyPhotoGallery", 0)->style->width;

				//echo $html->find("#prettyPhotoGallery", 0)->children(0)->children(1)->children(0)->plaintext;
				$temp = $html->find("#prettyPhotoGallery", 0)->children(0)->children(1)->children(1)->style;
				preg_match('/width: (?<wdt>\w+)px/', $temp, $matches);
				$result[$html->find('h1',0)->plaintext][trim($html->find("#prettyPhotoGallery", 0)->children(0)->children(1)->children(0)->plaintext)]=$matches[1];
				//echo $matches[1].'<br/>';

				if($html->find("#prettyPhotoGallery", 0)->children(0)->children(3) !=null)
				{
					//echo $html->find("#prettyPhotoGallery", 0)->children(0)->children(3)->children(0)->plaintext;
					$temp = $html->find("#prettyPhotoGallery", 0)->children(0)->children(3)->children(1)->style;
					preg_match('/width: (?<wdt>\w+)px/', $temp, $matches);
					$result[$html->find('h1',0)->plaintext][trim($html->find("#prettyPhotoGallery", 0)->children(0)->children(3)->children(0)->plaintext)]=$matches[1];
					//echo $matches[1].'<br/>';
				}

				if($html->find("#prettyPhotoGallery", 0)->children(0)->children(5) !=null)
				{
					//echo $html->find("#prettyPhotoGallery", 0)->children(0)->children(5)->children(0)->plaintext;
					$temp = $html->find("#prettyPhotoGallery", 0)->children(0)->children(5)->children(1)->style;
					preg_match('/width: (?<wdt>\w+)px/', $temp, $matches);
					$result[$html->find('h1',0)->plaintext][trim($html->find("#prettyPhotoGallery", 0)->children(0)->children(5)->children(0)->plaintext)]=$matches[1];
					//echo $matches[1].'<br/>';
				}

				if($html->find("#prettyPhotoGallery", 0)->children(0)->children(7) !=null)
				{
					//echo $html->find("#prettyPhotoGallery", 0)->children(0)->children(7)->children(0)->plaintext;
					$temp = $html->find("#prettyPhotoGallery", 0)->children(0)->children(7)->children(1)->style;
					preg_match('/width: (?<wdt>\w+)px/', $temp, $matches);
					$result[$html->find('h1',0)->plaintext][trim($html->find("#prettyPhotoGallery", 0)->children(0)->children(7)->children(0)->plaintext)]=$matches[1];
					//echo $matches[1].'<br/>';
				}

				if($html->find("#prettyPhotoGallery", 0)->children(0)->children(9) !=null)
				{
					//echo $html->find("#prettyPhotoGallery", 0)->children(0)->children(9)->children(0)->plaintext;
					$temp = $html->find("#prettyPhotoGallery", 0)->children(0)->children(9)->children(1)->style;
					preg_match('/width: (?<wdt>\w+)px/', $temp, $matches);
				$result[$html->find('h1',0)->plaintext][trim($html->find("#prettyPhotoGallery", 0)->children(0)->children(9)->children(0)->plaintext)]=$matches[1];
					//echo $matches[1].'<br/>';
				}

				if($html->find("#prettyPhotoGallery", 0)->children(0)->children(11) !=null)
				{
					//echo $html->find("#prettyPhotoGallery", 0)->children(0)->children(11)->children(0)->plaintext;
					$temp = $html->find("#prettyPhotoGallery", 0)->children(0)->children(11)->children(1)->style;
					preg_match('/width: (?<wdt>\w+)px/', $temp, $matches);
					$result[$html->find('h1',0)->plaintext][trim($html->find("#prettyPhotoGallery", 0)->children(0)->children(11)->children(0)->plaintext)]=$matches[1];
					//echo $matches[1].'<br/>';
				}

				if($html->find("#clsloveD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clsloveD", 0), $matches);
					//echo 'Loved: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['loved']=$matches[1];
				}
				if($html->find("#clslikeD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clslikeD", 0), $matches);
					//echo 'Liked: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['liked']=$matches[1];
				}
				if($html->find("#clsdislikeD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clsdislikeD", 0), $matches);
					//echo 'Disliked: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['disliked']=$matches[1];
				}
				if($html->find("#clswinterD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clswinterD", 0), $matches);
					//echo 'Winter: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['winter']=$matches[1];
				}
				if($html->find("#clsspringD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clsspringD", 0), $matches);
					//echo 'Spring: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['spring']=$matches[1];
				}
				if($html->find("#clssummerD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clssummerD", 0), $matches);
					//echo 'Summer: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['summer']=$matches[1];
				}
				if($html->find("#clsautumnD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clsautumnD", 0), $matches);
					//echo 'Autumn: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['autumn']=$matches[1];
				}
				if($html->find("#clsdayD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clsdayD", 0), $matches);
					//echo 'Day: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['day']=$matches[1];
				}
				if($html->find("#clsnightD", 0) != null)
				{
					preg_match('/height: (?<wdt>\w+)px/', $html->find("#clsnightD", 0), $matches);
					//echo 'Night: '.$matches[1].'<br/>';
					$result[$html->find('h1',0)->plaintext]['night']=$matches[1];
				}

			}

		}

	}
	foreach($result as $count => $data)
	{
		echo $count;
		foreach ($data as $key => $value) {
			echo ';'.$key.'^'.$value;
		}
		echo '~';
		echo PHP_EOL;
	}
	unset($result);
	$result="";
}



//file_put_contents('filename.txt', print_r($result, true));
//var_dump($result);
?>
