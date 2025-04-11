//alert('Welcome');

function changeBlue() {
    document.getElementById('box').style.background="lightblue";
    document.getElementById('box').style.fontSize="20px";
    document.getElementById('box').style.color="black";
    document.getElementById('box').style.fontFamily="Tahoma";
}

function changeRed() {
    document.getElementById('box').style.background="crimson";
    document.getElementById('box').style.fontSize="20px";
    document.getElementById('box').style.color="white";
    document.getElementById('box').style.fontFamily="Arial";
}

function addItem() {
    let newmenu = prompt("Enter menu name");

    let newItem = document.createElement("li");
    newItem.innerText = newmenu;
    document.getElementById('list').appendChild(newItem);
}

function orderFood() {
    let checked_menu = document.querySelectorAll('input[type=checkbox]:checked')

    let info = document.getElementById('info');
    let priceInfo = document.getElementById('priceInfo');
    let checked_values = [];
    let price = 0;

    checked_menu.forEach(function (checkbox) {
        if (checkbox.value == "nasi ayam") {
            price += 7;
        } else if (checkbox.value == "mee goreng") {
            price += 5;
        }else if (checkbox.value == "nasi lemak") {
            price += 4;
        }else if (checkbox.value == "roti canai") {
            price += 1.50;
        }

        checked_values.push(checkbox.value);

    })

    info.innerText = checked_values.join(', ');
    priceInfo.innerHTML = "<strong>Total Price : RM " + price + "\n<strong>"


}