// hamburger
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");

  menuBtn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
// end hamburger

// hover link
  let hideDropdownTimeout;

  function hideDropdownWithDelay() {
      hideDropdownTimeout = setTimeout(() => {
          document.getElementById("dropdown").classList.add("hidden");
      }, 800); // 3 detik
  }

  function cancelHideDropdown() {
      clearTimeout(hideDropdownTimeout);
      document.getElementById("dropdown").classList.remove("hidden");
  }
// end hover link

// swiper
const swiper = new Swiper(".swiper-container", {
  loop: true,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 5,
  direction: "horizontal",
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    reverseDirection: true,
  },
});
// end swiper

// SweetAlert2
$(document).ready(function () {
  // Cek apakah URL mengandung 'laporkan'
  if (window.location.pathname.includes("laporkan.html")) {
    // Menampilkan SweetAlert2 hanya di halaman laporkan
    Swal.fire({
      title: "Halo!",
      text: "Ini adalah contoh SweetAlert2 yang muncul otomatis di halaman laporkan.",
      icon: "success",
      confirmButtonText: "Oke",
    });
  }
});
// End SweetAlert2

// Image
    function showImage(imageUrl) {
        Swal.fire({
            imageUrl: imageUrl,
            imageAlt: "Gambar Laporan",
            showConfirmButton: false,
            showCloseButton: true,
            customClass: {
                popup: "rounded-lg shadow-lg",
            },
        });
    }
// End image