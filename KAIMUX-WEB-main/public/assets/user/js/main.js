// Do not mess with this file unless you know what you're doing :P

$(document).on('click', 'a[href^="#"]', function (e) {
	e.preventDefault();

	$('html, body').animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 900);
});

// This is for the click to copy
let t;
$(document).ready(()=>{
	t = $(".ip").html();
})
$(document).on("click",".ip",()=>{
	let copy = document.createElement("textarea");
	copy.style.position = "absolute";
	copy.style.left = "-99999px";
	copy.style.top = "0";
	copy.setAttribute("id", "ta");
	document.body.appendChild(copy);
	copy.textContent = t;
	copy.select();
	document.execCommand("copy");
	$(".ip").html("<span class='extrapad'>IP Nukopijuotas!</span>");
	setTimeout(function(){
		$(".ip").html(t);
		var copy = document.getElementById("ta");
		copy.parentNode.removeChild(copy);
	},1000);
});

// This is to fetch the player count
$(document).ready(()=>{
  const ip = $(".sip").attr("data-ip");
  const port = $(".sip").attr("data-port");

  $.get(`https://mcapi.us/server/status?ip=${ip}&port=${port}`, (result)=>{
    if (result.online) {
      $(".sip").html(result.players.now);
    } else {
      $(".playercount").html("Išjungtas");
    }
  });

  setInterval(()=>{
    $.get(`https://mcapi.us/server/status?ip=${ip}&port=${port}`, (result)=>{
      if (result.online) {
        $(".sip").html(result.players.now);
      } else {
        $(".playercount").html("Išjungtas");
      }
    });
  }, 5000);
});

function checkDiscountCodeForCart(username) {
	const discountCode = $("#discount-code").val();
	if (discountCode == "")
		return;
	$.ajax({
		url: '/api/checkDiscountCodeCart/' + discountCode + "/" + username,
		type: 'GET',
		success: function(data) {
			if (data.status === 1) {
				let text = "";
				text += "Nuolaidos kodas galiojantis!<br>";

				if (data.valid_for_service != null) {
					text += "Galioja tik paslaugai: " + data.valid_for_service + "<br>";
				}
				if (data.limit != null && data.limit != 0) {
					text += "Galioja tik " + data.limit + " kartus<br>";
				}
				text += data.amount + "% nuolaida!<br>";
				text += "Kaina po nuolaidos: " + (data.price / 100) + "€";
				

				$("#discount-status1").html(text);
				$("#discount-status1").css("color", "green");
				$("#discount-status2").html(text);
				$("#discount-status2").css("color", "green");
			} else if (data.status === 2) {
				$("#discount-status1").html("Nuolaidos kodas galioja tik perkant paslaugą po vieną");
				$("#discount-status1").css("color", "blue");
				$("#discount-status2").html("Nuolaidos kodas galioja tik perkant paslaugą po vieną");
				$("#discount-status2").css("color", "blue");
			} else if (data.status === 3) {
				$("#discount-status1").html("Nuolaidos kodas negalioja");
				$("#discount-status1").css("color", "red");
				$("#discount-status2").html("Nuolaidos kodas negalioja");
				$("#discount-status2").css("color", "red");
			}
		}
	});
}

function addToCart(service) {
	$.ajax({
		url: '/api/addToCart/' + service,
		type: 'GET',
		success: function(data) {
			alert('Paslauga pridėta į krepšelį!');
		}
	})
}

function minusFromCart(service) {
	$.ajax({
		url: '/api/minusFromCart/' + service,
		type: 'GET',
		success: function(data) {
			if (data.count === 0) {
				$("#"+service).remove();
			} else {
				$("#"+service+"-count").html(data.count);
			}
			recalculatePrice();
		}
	})
}

function plusToCart(service) {
	$.ajax({
		url: '/api/plusToCart/' + service,
		type: 'GET',
		success: function(data) {
			$("#"+service+"-count").html(data.count);
			recalculatePrice();
		}
	})
}

function recalculatePrice() {
	$.ajax({
		url: '/api/recalculateCartPrice',
		type: 'GET',
		success: function(data) {
			$("#priceOne").html(data.totalPrice + "€");
			$("#priceTwo").html(data.totalPrice + "€");
		}
	})
}