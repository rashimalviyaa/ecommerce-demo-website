
document.addEventListener('DOMContentLoaded', function() { //This event listener waits for the HTML document to be fully loaded and parsed before executing the code inside the function. It ensures that JavaScript code runs after the document's structure is ready, which is important for interacting with DOM elements.

    // Get the "Shop Now" button by its ID
    const shopButton = document.querySelector('#hero button');

    // Add a click event listener to the button
    shopButton.addEventListener('click', function() {
        alert('Welcome to TechTrendZ! Happy shopping!');
    });
});

setTimeout(function() {
    alert("Welcome to our website!");
}, 3000); 