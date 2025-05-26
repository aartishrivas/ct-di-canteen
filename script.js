const menuItems = document.querySelectorAll(".menu-item");
let currentIndex = 0;

function showItem(index) {
  menuItems.forEach((item, i) => {
    item.classList.remove("active");
    if (i === index) {
      item.classList.add("active");
    }
  });
}

document.getElementById("nextBtn").addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % menuItems.length; // Loop back to the first item
  showItem(currentIndex);
});

document.getElementById("prevBtn").addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + menuItems.length) % menuItems.length; // Loop back to the last item
  showItem(currentIndex);
});

// Initialize the first item
showItem(currentIndex);
