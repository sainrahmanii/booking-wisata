const plus = document.getElementById("plus");
const minus = document.getElementById("minus");
const text = document.getElementById("count-text");
const people = document.getElementById("people");
const totalPpnPriceElement = document.getElementById("total-ppn-price");
const totalPriceElement = document.getElementById("total-price");
const totalPricePeopleElement = document.getElementById("total-price-people");

const pricePerItem = realTicketPrice.value; // default price per item in Rupiah

function formatRupiah(number) {
    return "Rp " + number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function updateTotalPrice() {
    let currentValue = parseInt(people.value);
    let totalPrice = currentValue * pricePerItem;
    const ppn = 0.11;
    const ppnPrice = totalPrice * ppn;
    const totalPriceWithPPN = totalPrice + ppnPrice;
    totalPriceElement.textContent = formatRupiah(totalPriceWithPPN);
    totalPricePeopleElement.textContent = formatRupiah(totalPrice);
    totalPpnPriceElement.textContent = formatRupiah(ppnPrice);
}

plus.addEventListener("click", () => {
    let currentValue = parseInt(people.value);
    currentValue++;
    people.value = currentValue;
    text.textContent = currentValue;
    updateTotalPrice();
});

minus.addEventListener("click", () => {
    let currentValue = parseInt(people.value);
    if (currentValue > 1) {
        currentValue--;
        people.value = currentValue;
        text.textContent = currentValue;
        updateTotalPrice();
    }
});

// Initialize total price
updateTotalPrice();