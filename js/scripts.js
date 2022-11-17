$(document).ready(function () {
	
	$('.title a').click(function () {

		$('.title a').removeClass('active')
		$(this).addClass('active');
	});

	

	$(".country").click(function() {
        // получаем то, что написал пользователь
        var searchString    = $("#country").val();
        // формируем строку запроса
        var data            = 'search='+ searchString;

        // если searchString не пустая
        if(searchString) {
            // делаем ajax запрос
            $.ajax({
                type: "POST",
                url: "do_search.php",
                data: data,
                beforeSend: function(html) { // запустится до вызова запроса
                    $("#results").html('');
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ // запустится после получения результатов
                    $("#results").show();
                    $("#results").append(html);
              }
            });
        }
        return false;
    });









});