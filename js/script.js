// Функция для добавления в корзину
function addToCart(name, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({name, price});
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${name} добавлен в корзину!`);
    updateCartCount();
}

// Обновление счетчика корзины
function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = document.getElementById('cart-count');
    if (cartCount) {
        cartCount.textContent = cart.length;
    }
}

// Функция для оформления заказа
function placeOrder() {
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const comments = document.getElementById('comments').value;
    
    if (!name || !phone || !address) {
        alert('Пожалуйста, заполните все обязательные поля');
        return;
    }
    
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart.length === 0) {
        alert('Корзина пуста!');
        return;
    }
    
    alert(`Заказ оформлен! Мы свяжемся с вами по номеру ${phone}\nСумма заказа: ${calculateTotal()} ₽`);
    localStorage.removeItem('cart');
    updateCartCount();
    window.location.href = 'index.html';
}

// Подсчет суммы корзины
function calculateTotal() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    return cart.reduce((total, item) => total + item.price, 0);
}

// Отображение корзины на странице заказа
function displayCart() {
    const cartContainer = document.getElementById('cart-items');
    const totalElement = document.getElementById('cart-total');
    
    if (!cartContainer) return;
    
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cart.length === 0) {
        cartContainer.innerHTML = '<p>Корзина пуста</p>';
        totalElement.textContent = '0';
        return;
    }
    
    cartContainer.innerHTML = '';
    cart.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item';
        cartItem.innerHTML = `
            <span>${item.name}</span>
            <span>${item.price} ₽</span>
        `;
        cartContainer.appendChild(cartItem);
    });
    
    totalElement.textContent = calculateTotal();
}

// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
    displayCart();
});