const wrapper = document.querySelector(".menu-wrapper");

let startX = 0;
let currentIndex = 0;
const threshold = 50; // Minimum distance to be considered as swipe
const totalItems = wrapper.children.length;
const visibleItems = 3; // Jumlah item yang ditampilkan sekaligus
let isSwiping = false;

wrapper.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
    isSwiping = true;
    console.log("Touch Start:", startX);
});

wrapper.addEventListener("touchmove", (e) => {
    if (!isSwiping) return;

    let moveX = e.touches[0].clientX;
    let diffX = startX - moveX;
    console.log("Touch Move - MoveX:", moveX, "DiffX:", diffX);

    if (diffX > threshold) {
        // Geser ke kiri
        if (currentIndex < totalItems - visibleItems) {
            currentIndex++;
            wrapper.style.transform = `translateX(-${
                currentIndex * (100 / visibleItems)
            }%)`;
            console.log("Swiped Left to Index:", currentIndex);
        }
        isSwiping = false; // Prevent multiple swipes
    } else if (diffX < -threshold) {
        // Geser ke kanan
        if (currentIndex > 0) {
            currentIndex--;
            wrapper.style.transform = `translateX(-${
                currentIndex * (100 / visibleItems)
            }%)`;
            console.log("Swiped Right to Index:", currentIndex);
        }
        isSwiping = false; // Prevent multiple swipes
    }
});

wrapper.addEventListener("touchend", () => {
    isSwiping = false; // Reset swipe state
    console.log("Touch End");
});
