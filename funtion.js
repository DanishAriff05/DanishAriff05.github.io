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

let btnKlik = document.getElementById('klik');

btnKlik.onclick = function() {
    alert('Button ditekan');
}

let txtWelcome = document.getElementById('welcome');

txtWelcome.onmouseover = function() {
    txtWelcome.innerText = "Selamat Datang";
}

txtWelcome.onmouseout = function() {
    txtWelcome.innerText = "Welcome";
}

let ming = document.getElementById('ming')

ming.onmouseover = function() {
    this.src = "https://static.wikia.nocookie.net/schedule-1/images/f/fa/Kyle_Mugshot.png/revision/latest?cb=20250406110317";

    this.style.filter = "blur(0px)";
    this.style.transform = "scale(2)"
    this.style.transition = "transform 0.5s ease-in-out"
}

ming.onmouseout = function() {
    this.src = "https://static.wikia.nocookie.net/schedule-1/images/6/63/Wong_Mugshot.png/revision/latest/thumbnail/width/360/height/450?cb=20250406110407";

    this.style.filter = "blur(2px)";
    this.style.transform = "scale(1)"
}

function checkJabatan() {
    let jabatan = document.getElementById('jabatan');
    let selectedJabatan = jabatan.options[jabatan.selectedIndex].value;

    alert("You have selected : " + selectedJabatan);
    console.log(selectedJabatan);
}

