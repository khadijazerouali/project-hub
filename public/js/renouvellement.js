// grand photo
function openModal() {
  document.getElementById("myModal").style.display = "block";
  document.getElementById("fullImage").src = document.querySelector(".thumbnail").src;
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

//price 
function updatePrice() {
  const selectElement = document.getElementById("selectExample");
  const priceDisplay = document.getElementById("priceDisplay");
  let price = "";

  switch (selectElement.value) {
    case "1":
      price = "Prix: 12.00 €";
      break;
    case "2":
      price = "Prix: 59.00 €";
      break;
    case "3":
      price = "Prix: 26.00 €";
      break;
    case "4":
      price = "Prix: 40.00 €";
      break;
    default:
      price = "";
  }

  priceDisplay.textContent = price;
  document.getElementById("alertMessage").style.display = "none";
}

// زيادة/نقصان الكمية
function increaseQuantity() {
  const quantityInput = document.getElementById("quantity");
  quantityInput.textContent = parseInt(quantityInput.textContent) + 1; 
}

function decreaseQuantity() {
  const quantityInput = document.getElementById("quantity");
  if (parseInt(quantityInput.textContent) > 1) { 
    quantityInput.textContent = parseInt(quantityInput.textContent) - 1; 
  }
}

// تقديم الطلب
function placeOrder() {
  const selectElement = document.getElementById("selectExample");
  const quantity = document.getElementById("quantity").textContent; 
  const alertMessage = document.getElementById("alertMessage");

  if (selectElement.value === "choisir une option") {
    alertMessage.style.display = "block"; 
  } else {
    alertMessage.style.display = "none";
    alert(`Votre demande a été complétée avec succès. Quantité : ${quantity}`);
  }
}





let reviewCount = 0;

function toggleForm() {
  const form = document.getElementById("reviewForm");
  form.classList.toggle("hidden");
}

function addReview(event) {
  event.preventDefault();
  reviewCount++;
  updateReviewCount();

  const name = document.getElementById("name").value;
  const rating = document.getElementById("rating").value;
  const comment = document.getElementById("comment").value;

  const reviewDiv = document.createElement("div");
  reviewDiv.className = "review";
  reviewDiv.innerHTML = `
    <strong>${name}</strong> - ${"★".repeat(rating)}${"☆".repeat(5 - rating)}<br>
    <p>${comment}</p>
  `;

  const reviewsContainer = document.getElementById("reviewsContainer");
  reviewsContainer.prepend(reviewDiv); // review up
  document.getElementById("reviewForm").reset();
  document.getElementById("rating").value = 0;
  clearStars();
}

function updateReviewCount() {
  const button = document.getElementById("toggleButton");
  button.innerText = `(${reviewCount}) Avis`;
}

function setRating(rating) {
  document.getElementById("rating").value = rating;
  const stars = document.querySelectorAll(".star");
  stars.forEach((star, index) => {
    star.classList.toggle("active", index < rating);
  });
}

function clearStars() {
  const stars = document.querySelectorAll(".star");
  stars.forEach(star => {
    star.classList.remove("active");
  });
}
