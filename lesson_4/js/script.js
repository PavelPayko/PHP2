
function getMoreProduct() {
    /* С какого товара начинаем делать выборку из базы при ajax-запросе */
    var startFrom = 5;
    $.ajax({
        url: 'server.php',
        method: 'POST',
        data: { "startFrom": startFrom },
    }).done(function (data) {
        /* Преобразуем результат, пришедший от обработчика - преобразуем json-строку обратно в массив */
        data = JSON.parse(data);

        if (data.length > 0) {

            /* Делаем проход по каждому результату, оказвашемуся в массиве*/
            $.each(data, function (index, data) {

                /* Отбираем по идентификатору блок с товарами и дозаполняем его новыми данными */
                $("#mainGoods").append("<div class='goodsWrap'><div class='wrapGoodImg'><a href='item.php?photo=" + data.bigPhoto + "&id=" + data.id + "'><img class='goodImg'src='" + data.miniPhoto + "'></a></div><div class='wrapGoodInfo'><div class='goodsNameFull'>" + data.nameFull + "</div><div class='goodsPrice'>" + data.price + "<b>&#8381;</b></div><div class='goodsParam'><span><b>Состав: </b></span>" + data.param + "</div></div></div>");
            });

            // Увеличиваем на 10 счетчик
            startFrom += 10;
        }
    });
};


