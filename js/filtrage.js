var filtrage = document.getElementById("auteur");
var cards = document.querySelectorAll(".gallery-images");
var authors = document.querySelectorAll(".author_name");
var min = document.getElementById("min");
var max = document.getElementById("max");
var prix = document.querySelectorAll(".prix");



filtrage.onchange = function () {
    let author = filtrage.value;

    for (let index = 0; index < cards.length; index++) {
        if (authors[index].text !== author) {
            cards[index].style.display = 'none';
        } else {
            cards[index].style.display = 'block';
        }

    }
    
}


min.onkeyup = function () {

    for (let index = 0; index < cards.length; index++) {
            

        if (parseInt(prix[index].text) < parseInt(min.value)) {
            cards[index].style.display = 'none';
    
        } 

        if (isNaN(parseInt(min.value))) {
            cards[index].style.display = 'block';
        }
    
    }

}

max.onkeyup = function () {
 
    for (let index = 0; index < cards.length; index++) {

        if (parseInt(prix[index].text) >  parseInt(max.value)) {
            cards[index].style.display = 'none';
    
        } else {
            cards[index].style.display = 'block';
        }

        if (isNaN(parseInt(max.value))) {
            cards[index].style.display = 'block';
        }
    
    }


}

