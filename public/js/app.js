// Add event listener to the navbar toggle button
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');

    navbarToggle.addEventListener('click', function() {
        navbarMenu.classList.toggle('show');
    });
});

// Add event listener to the search form
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.querySelector('.search-form');
    const searchInput = document.querySelector('.search-input');

    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const searchQuery = searchInput.value;
        // Add your search logic here
        console.log(searchQuery);
    });
});

// Add event listener to the add to cart buttons
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const productId = button.dataset.productId;
            // Add your add to cart logic here
            console.log(productId);
        });
    });
});
