// JavaScript Document
function lo(th, url) {
	$.ajax(url, { cache: false, success: function (x) { $(th).html(x) } })
}
function good(id) {
	$.post("./api/good.php", { id }, () => {
		location.reload();
	})
}

function clean() {
	$("input[type='text'],input[type='password'],input[type='number'],input[type='radio']").val("");
}