document.body.onfocus = addHoverOnCard();

function addHoverOnCard() {
    var element = document.getElementsByClassName("card");
    element.classList.add("custom");
}
