<?php
include 'DB.php';

// Получаем первые 10 товаров, которые будут видны изначально
$res = mysqli_query($db, "SELECT * FROM `goods` ORDER BY `id` DESC LIMIT 5");

// Формируем массив из 10 товаров
$goods = array();
while($row = mysqli_fetch_assoc($res))
{
    $goods[] = $row;
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset = "utf-8" />
	<title>Товары</title>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>

<div style="width: 200px;" id="mainGoods">

<?php
        if (isset($goods))
            foreach ($goods as $good) : ?>
                <div class='goodsWrap'>
                    <div class="wrapGoodImg">
                        <a href="item.php?photo=<?= $good['bigPhoto'] ?>&id=<?= $good['id'] ?>"><img class='goodImg'src="<?= $good['miniPhoto'] ?>"></a>
                    </div>
					<div class="wrapGoodInfo">
					<div class='goodsNameFull'><?= $good['nameFull']; ?></div>
                    <div class='goodsPrice'><?= $good['price'] ?><b>&#8381;</b></div>
                    <div class='goodsParam'><span><b>Состав: </b></span><?= $good['param'] ?></div>
					</div>
                </div>
            <?php endforeach; ?>

</div>

<button id="more" onclick='getMoreProduct()'>Дальше</button>

</body>
</html>