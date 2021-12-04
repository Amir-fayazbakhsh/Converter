<?php

require 'vendor/autoload.php';
use Imagine\Image\Box;
use Imagine\Image\Point;
use Carbon\Carbon;
////////////

$fimg = "index.jpeg";
?>
<p>first pic</p>
<img src=<?=$fimg?>>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

// $image = new Imagine\Gd\Imagine();
// $image->open('index.jpeg')
// ->resize(new box(200,100))
// ->save('amirfzishere.jpeg');

$imagine = new Imagine\Gd\Imagine();
// or
// $imagine = new Imagine\Imagick\Imagine();

$image = $imagine->open('index.jpeg');

$image->resize(new Box(15, 25))
	->rotate(45)
	->crop(new Point(0, 0), new Box(45, 45))
	->save('image.jpeg');
?>
<br>
<br>
<br><br>
<br>
<br>
<img src='image.jpeg'>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
$c = new Carbon;
echo $c->diffForHumans($c->year());
?>

