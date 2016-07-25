var moreBtn = document.querySelector(".load-more");
var extraRow = document.querySelector(".extra-row");
moreBtn.addEventListener("click", function() {
	if (extraRow.classList.contains("hidden")) {
		extraRow.classList.remove("hidden");
    moreBtn.classList.add("hidden");
	} 
}, false)