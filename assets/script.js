let currentIndex = 0;

const images = document.querySelectorAll(".carousel-images img");
const totalImages = images.length;

document.querySelector(".next").addEventListener("click", nextImage);
document.querySelector(".prev").addEventListener("click", prevImage);

function showImage(index) {
  const offset = index * -600; // Adjust based on image width
  document.querySelector(
    ".carousel-images"
  ).style.transform = `translateX(${offset}px)`;
  updateCaption(index);
}

function nextImage() {
  currentIndex = (currentIndex + 1) % totalImages;
  showImage(currentIndex);
}

function prevImage() {
  currentIndex = (currentIndex - 1 + totalImages) % totalImages;
  showImage(currentIndex);
}

function updateCaption(index) {
  const captions = [
    { name: "Mr. Susilo", title: "Jabatan 1" },
    { name: "Mr. Hermanto", title: "Jabatan 2" },
    { name: "Mrs. Lia", title: "Jabatan 3" },
  ];

  const caption = captions[index];
  document.querySelector(".carousel-caption h3").textContent = caption.name;
  document.querySelector(".carousel-caption p").textContent = caption.title;
}

// Initialize the first image
showImage(currentIndex);
