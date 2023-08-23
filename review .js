function calculateAverageRating(productName) {
    var reviews = productData[productName].reviews;
    if (!reviews || reviews.length === 0) {
        return 0; // No reviews yet
    }

    var totalRating = 0;
    for (var i = 0; i < reviews.length; i++) {
        totalRating += reviews[i].rating;
    }

    return totalRating / reviews.length;
}
var selectedRating = 0; // Initialize the selected rating

function rateProduct(rating) {
    selectedRating = rating;
    updateStarRating();
}

function updateStarRating() {
    var stars = document.querySelectorAll('.star');

    // Remove the "filled" class from all stars
    stars.forEach(function (star) {
        star.classList.remove('filled');
    });

    // Add the "filled" class to stars up to the selected rating
    for (var i = 0; i < selectedRating; i++) {
        stars[i].classList.add('filled');
    }
}

var selectedRating = 0; // Initialize the selected rating

function rateProduct(rating) {
    selectedRating = rating;
    updateStarRating();
}

function updateStarRating() {
    var stars = document.querySelectorAll('.star');

    // Remove the "filled" class from all stars
    stars.forEach(function (star) {
        star.classList.remove('filled');
    });

    // Add the "filled" class to stars up to the selected rating
    for (var i = 0; i < selectedRating; i++) {
        stars[i].classList.add('filled');
    }
}
