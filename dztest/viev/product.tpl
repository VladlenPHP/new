<?


$id = $_GET["$id"];

$good = $goods[$id];



foreach ($goods as $id => $good) {?>
	<div class="good">
		<div class="demo">
			<?if ($good["mediaLinkVideo"]) {?>
				<a href="<?=$good["mediaLinkVideo"]?>">Видео</a>
			<?}?>
			<br>
			<?if ($good["mediaLinkDemo"]) {?>
				<a href="<?=$good["mediaLinkDemo"]?>">Демонстрация товара</a>
			<?}?>
		</div>
		<div class="sticker">
			<?if ($good["sticker"]) {?>
				<span class="<?=$good["sticker"][0]?>"><?=$good["sticker"][1]?></span>
			<?}?>
		</div>
		<div class="image"> 
			 <?if ($good["imgGood"]) {?>
				<img href="<?=$good["imgGood"][0]?>" src="images/product/<?=$good["imgGood"][1]?>" 
				alt="<?=$good["imgGood"][2]?>" title="<?=$good["imgGood"][3]?>">
			<?}?> 
		</div>
		<div class="nameGood">
			<?if ($good["nameGood"]) {?>
				<a href="<?=$good["nameGood"]["nameLink"]?>"><?=$good["nameGood"]["name"]?></a>
			<?}?>
		</div>
		<div class="endingGood">
			<?if ($good["endingGood"]) {?>
				<div class="endingGood_">Заканчивается!!!</div>
			<?}?>
		</div>
		<div class="oldprice">
			<?if ($good["oldPrice"]) {?>
				<div class="oldPrice_">Старая цена:<?=$good["oldPrice"]?></div>
			<?}?>
		</div>
		<div class="price">
			<?if ($good["price"]) {?>
				<div class="Price_">Ц е н а:<?=$good["price"]?></div>
			<?}?>
		</div>
		<form>
		
		</form>
		<div class="raiting">
			<?if ($good["raiting"]) {?>
				<div class="raiting_">Рейтинг:<?=$good["raiting"]?> зведы</div>
			<?}?>
		</div>
		<div class="reviews">
			<?if ($good["reviews"]) {?>
				<div class="reviews">Просмотров:
				<a href="<?=$good["reviews"]["0"]?>"><?=$good["reviews"]["1"]?></a>
				</div>
			<?}?>
		</div>
		<div class="features"> 
			 <?if ($good["features"]) {?>
				<img src="images/feature/<?=$good["features"][0]?>">
				<img src="images/feature/<?=$good["features"][1]?>">
				<img src="images/feature/<?=$good["features"][2]?>">
				<img src="images/feature/<?=$good["features"][3]?>">
			<?}?> 
		</div>
		<div class="description">
			<?if ($good["description"]) {?>
				<div class="description_">Характеристики: </br><?=$good["description"]?></div>
			<?}?>
		</div>
	</div>

	<?}?>
	<?	
?>