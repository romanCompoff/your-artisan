<?php


echo '<div class="row">';
echo '<h1>Компьютерные услуги в Вашем городе</h1>';
foreach($content as $j){


echo '<div class = "col-sm-5 col-xs-9">';
echo '<div class="card">';
$mImg = str_replace('.html', '.png', $j);
$data = file_get_contents(sprintf('pages/%s/%s', $city, $j));
$data= json_decode($data);
echo sprintf('<img class="card-img-top" src="/images/%s" alt="Card image cap">' , $mImg);
echo '<div  class="card-block">';
echo sprintf('<h4 style = "min-height:50px;" class="card-title">%s</h4>', $data[5]);
echo sprintf('<p class="card-text" style = "min-height:70px;">%s</p>', $data[6]);
echo sprintf('<a href="/%s/%s" class="btn btn-primary">Перейти</a>', $city, $j);
echo '</div>';
echo '</div>';
echo '</div>';

}
echo '</div>';

echo '<div class="row justify-content-between">';
?>
<?=$pPage?>
<?=$nPage?>
</div>
<style>

.col-sm-5{
	margin:33px;
}
</style>
