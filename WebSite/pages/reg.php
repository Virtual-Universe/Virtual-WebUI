<h1 class="radiok">Select Your inworld look</h1> <hr>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner" role="listbox">
<?php
$data = array('Method' => 'GetAvatarArchives', 'WebPassword' => md5(WEBUI_PASSWORD));
 $curl = new curl_json();
   $recieved = $curl->perform_action($data);
                               		$names = $recieved['names'];
		$snapshot = $recieved['snapshot'];
		$count = count($names);
		for ($i = 0; $i < $count; $i++)
		{

      if($snapshot[$i] == "00000000-0000-0000-0000-000000000000")
      {
      $snap = "ec4b9f0b-d008-45c6-96a4-01dd947ac621";
      }
      else
      {
      $snap = $snapshot[$i];
      }
      if($names[$i] == DEFAULT_AVATAR)
      {
      $item = "active";
      }
      else
      {
      $item = "";
      }
      $img = WEBUI_TEXTURE_SERVICE."/index.php?method=GridTexture&uuid=".$snap;
 

?>

    <!-- Wrapper for slides -->

      <div class="item <?=$item;?>">
 <img src="<?=$img;?>" alt="Chania"  class="item" width="120" height="120">
<?php
	echo "<div class='radiok'><input type=\"radio\" id=\"$names[$i]\" name=\"AvatarArchive\" value=\"$names[$i]\"></div>";
?>
      </div>
       <?php
      }
 ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
