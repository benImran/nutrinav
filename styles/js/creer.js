
    var newItem_name;
    var newItem_gram;
    var newLi;
    var newSpan_name;
    var newSpan_gram;
    var basket = document.querySelector('#basket');
    var basket_children = [];
    var basket_grams = [];
    var quantity = 50;
    var total_quantity = 0;

    var values = document.querySelector('#values');
    var values_children;
    var products_entries_1;
    var products_entries_2;
    var products_entries_3;
    var verif = 0;

    var renderBasket = function(icon, list) {
        if (list == "add") {
            if (icon.classList.contains('selected')) {
                basket_children = document.querySelectorAll('li');
                for (var i = 0; i < basket_children.length; i++) {
                    if (icon.dataset.name == basket_children[i].dataset.name) {
                        oldvalue = basket_children[i].lastChild.innerHTML;
                        total_quantity += (basket_children[i].children[1].innerHTML = parseInt(oldvalue) + quantity)
                    }
                }
            } else {
                // ADD TO BASKET ////////////////////////////////
                // alex Vangnair Paul maire
                icon.classList.add('selected');
                newLi = document.createElement('li');
                newSpan_name = document.createElement('span');
                newSpan_gram = document.createElement('span');
                newItem_name = document.createTextNode(icon.dataset.name);
                newSpan_gram.innerHTML = quantity;
                newSpan_name.appendChild(newItem_name);
                newLi.appendChild(newSpan_name);
                newLi.appendChild(newSpan_gram);
                newLi.setAttribute('data-name', icon.dataset.name);
                newSpan_gram.setAttribute('data-name', icon.dataset.name);
                basket.appendChild(newLi);
                basket_children = document.querySelectorAll('li')
            }
        } else if (list == "sub") {
            if (icon.classList.contains('selected')) {
                for (var i = 0; i < basket_children.length; i++) {
                    if (icon.dataset.name == basket_children[i].dataset.name) {
                        if (parseInt(basket_children[i].lastChild.innerHTML) <= 50) {
                            basket.removeChild(basket_children[i]);
                            icon.classList.remove('selected')
                        }
                        oldvalue = basket_children[i].lastChild.innerHTML;
                        total_quantity += (basket_children[i].lastChild.innerHTML = parseInt(oldvalue) - quantity)
                    }
                }
                basket_children = document.querySelectorAll('li')
            }
        }
        // console.log(total_quantity);
        // return
    };

    var renderNutritive = function(icon, list) {
        values_children = document.querySelectorAll('.value');
        products_entries_1 = Object.entries(products);

        for (var j = 0; j < products_entries_1.length; j++) {
            if (products_entries_1[j][0] == icon.dataset.name) {
                products_entries_2 = Object.entries(products_entries_1[j][1]);
                products_entries_3 = Object.entries(products_entries_2);
                for (var k = 0; k < products_entries_3.length; k++) {
                    for (var i = 0; i < values_children.length; i++) {
                        if (products_entries_3[k][1][0] == values_children[i].dataset.value) {
                            if (list == "add") {
                                if (values_children[i].children[1]) {
                                    oldvalue = values_children[i].children[1].innerHTML;
                                    values_children[i].children[1].innerHTML = Math.round(100 * (parseFloat(oldvalue) + parseFloat(products_entries_3[k][1][1])) ) / 100
                                }else {
                                    var span = document.createElement('span');
                                    span.innerHTML = products_entries_3[k][1][1];
                                    values_children[i].appendChild(span)
                                }
                            } else if (list == "sub") {
                                if (icon.classList.contains('selected')) {
                                    console.log(icon.classList.contains('selected'));
                                    oldvalue = values_children[i].children[1].innerHTML;
                                    values_children[i].children[1].innerHTML = Math.round(100 * (parseFloat(oldvalue) - parseFloat(products_entries_3[k][1][1])) ) / 100
                                }

                            }
                        }
                    }
                }
            }
        }
    }
    var add = function(icon) {
        var ico_plus = icon.querySelector('.add_plus')
        ico_plus.addEventListener('click', function() {
            console.log("add " + icon.dataset.name)
            renderNutritive(icon, "add")
            renderBasket(icon, "add")
        })
    }

    var sub = function(icon){
        var ico_less = icon.querySelector('.add_less')
        ico_less.addEventListener('click', function() {
            console.log("sub " + icon.dataset.name)
            renderNutritive(icon, "sub")
            renderBasket(icon, "sub")
        })
    }


    var icons = document.querySelectorAll('.icon')
    for (var i = 0; i < icons.length; i++) {
        add(icons[i])
        sub(icons[i])
    }