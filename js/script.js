// Получаем элементы модального окна
const modal = document.getElementById("contactModal");
const contactButton = document.getElementById("contactButton");
const closeButton = document.querySelector(".close-button");

// Функция для открытия модального окна
contactButton.addEventListener("click", () => {
    modal.style.display = "block";
});

// Функция для закрытия модального окна
closeButton.addEventListener("click", () => {
    modal.style.display = "none";
});

// Закрытие окна при нажатии на область вне формы
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});