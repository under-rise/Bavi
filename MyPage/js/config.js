
function getParam(name, url) {
	if (!url) url = window.location.href;
	name = name.replace(/[\[\]]/g, "\\$&");
	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
		results = regex.exec(url);
	if (!results) return null;
	if (!results[2]) return '';
	return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function getStar(_point) {
	point = Number(_point);
	let html = "";
	for (i = 1; i <= 5; i++) {
		if (i > point) {
			html += '<img src="/assets/img/star_none.png" alt="星1個" />';
		} else if (i + 0.5 > point && point > i + 0.9) {
			html += '<img src="/assets/img/star_half.png" alt="星1個" />';
		} else {
			html += '<img src="/assets/img/star.png" alt="星1個" />';
		}
	}
	return html;
}