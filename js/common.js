$(document).ready(function() {

	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			//alert("Спасибо за заявку!");

            // Success message
            $('#success').html("<div class='alert alert-success'>");
            $('#success > .alert-success')
                .append("<strong>Заявка отправлена!</strong>");
            $('#success > .alert-success')
                .append('</div>');

            $('#success_floor').html("<div class='alert alert-success'>");
            $('#success_floor > .alert-success')
                .append("<strong>Заявка отправлена!</strong>");
            $('#success_floor > .alert-success')
                .append('</div>');

			setTimeout(function() {
				$("form").trigger("reset")
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

    //ckrolling
    $(window).load(function(){
        $('.str3').liMarquee();
    })
	
});

//  счётчик обратный
$(function(){

    var note = $('#note'),
        tsst = (new Date(2015,1, 27)).getTime(),
        ten = 10*24*60*60*1000,
        now = (new Date()).getTime(),
        tens,
        ts;
    tens = Math.floor((now - tsst)/ten)+1,
        ts = tsst + ten*tens;


    $('#countdown').countdown({
        timestamp        : ts,
        callback        : function(days, hours, minutes, seconds){

            var message = "";

            message += days + " дней" + ( days==1 ? '':'' ) + ", ";
            message += hours + " часов" + ( hours==1 ? '':'' ) + ", ";
            message += minutes + " минут" + ( minutes==1 ? '':'' ) + " и ";
            message += seconds + " секунд" + ( seconds==1 ? '':'' ) + " <br />";



            note.html(message);
        }
    });
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
// Плавный скроллинг при нажатии на ссылку
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
