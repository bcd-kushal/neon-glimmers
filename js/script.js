function showCard(i) {
    var card = document.getElementsByClassName("input_card")[i];
    if (card.style.visibility === "hidden") {
        card.style.visibility = "visible";
    } else {
        card.style.visibility = "hidden";
    }
}