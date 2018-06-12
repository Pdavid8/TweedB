function provera() {
	
	var fNameReg = /^[A-z][a-z]{3,14}$/;
	var lNameReg = /^(((\w)+)(\s(\w)+)*){4,25}$/;
	var mailReg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	
		var greske=new Array();
		var formaIme=$("#first-name");
		var formaPrezime=$("#last-name");
		var formaEmail=$("#address");
		var formaPoruka=$("#message");
		if(!fNameReg.test(formaIme.val())){
			formaIme.css('border-bottom','1px solid red');
			greske.push("Lose ime");
		} else {
			formaIme.css('border-bottom','1px solid #d0bd9c');
		}
		if(!lNameReg.test(formaPrezime.val())){
			formaPrezime.css('border-bottom','1px solid red');
			greske.push("Lose prezime");
		}else{
			formaPrezime.css('border-bottom','1px solid #d0bd9c');
		}
		if(!mailReg.test(formaEmail.val())){
			formaEmail.css('border-bottom','1px solid red');
			greske.push("Los mail");
		} else {
			formaEmail.css('border-bottom','1px solid #d0bd9c');
		}
		if(formaPoruka.val() == ''){
			formaPoruka.css('border-bottom','1px solid red');
			greske.push("Unesite tekst poruke");
		} else {
			formaPoruka.css('border-bottom','1px solid #d0bd9c');
		}

		 if(greske.length==0){
  			return true;
  			}
  			else{
   			 return false;
     		 }
}


var xmlhttp;
var berberiXML;
$(document).ready(function(){
	$(".mat-input").focus(function(){
		$(this).parent().addClass("is-active is-completed");
	});
	$('#barber-search').keypress(function(e){
		if(e.keyCode == 13){
			getBarbers('?pretraga=' + $('#barber-search').val());
		}
	})
	getBarbers()
	$(".mat-input").focusout(function(){
		if($(this).val() === "")
			$(this).parent().removeClass("is-completed");
		$(this).parent().removeClass("is-active");
	})	
	$(".fancybox-thumb").fancybox({
		openEffect	: 'none',
		padding: 0,
		closeEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 100,
				height	: 100
			}
		}
	});
	slider();

	
	$('#glasaj').click(function(){
		var cekirani = $('.radio:checked').val();
		$.post('poll_result.php', {vote: cekirani}, function(data){
			$('.rate-holder').html(data);
		})
	})
	$('#barber-list').change(function(){
		$.post('getBarber.php',{id:$('#barber-list').val()}, function(data){
			$('#prikaz').html(data);
		})
	})
});

function getBarbers(x=''){
	$.get('barbers.php'+x, function(data){
		$('#barber-pager').html(data);
	})
}
function slider(){
	var slides = document.querySelectorAll('#slider .slide'),
	curentSlide = 0,
	slideInterval
	setInterval(nextSlide,2500);

	function nextSlide(){
		slides[curentSlide].className = 'slide';
		curentSlide = (curentSlide + 1) % slides.length;
		slides[curentSlide].className = 'slide showing';
	}
}
// function createReq(){
// 	if(window.XMLHttpRequest){
// 		xmlhttp = new XMLHttpRequest();
// 	} else {
// 		xmlhttp = new ActiveXObject('Microsoft.HTTPXML')
// 	}
// }
