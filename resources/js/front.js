/* Import Library Bootstrap dari node_modules */

import Swiper from 'swiper/bundle';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import AOS from 'aos';
import GLightbox from 'glightbox';
import Isotope from 'isotope-layout';
import imagesLoaded from 'imagesloaded';
import PureCounter from '@srexi/purecounterjs';

window.Swiper = Swiper;

// Memberikan efek Hover color pada navlink ketika scroll
// Script Start
document.addEventListener('DOMContentLoaded', function() {
  const sections = document.querySelectorAll('section');
  const navLinks = document.querySelectorAll('#navmenu ul li a');

  const options = {
      root: null,
      threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              navLinks.forEach(link => {
                  link.classList.remove('active');
                  if (link.getAttribute('href') === '#' + entry.target.id) {
                      link.classList.add('active');
                  }
              });
          }
      });
  }, options);

  sections.forEach(section => {
      observer.observe(section);
  });
});
// Script End

// Inisialisasi AOS
AOS.init();

// Inisialisasi GLightbox
const lightbox = GLightbox({
  selector: '.glightbox', // Selector untuk elemen yang akan menggunakan GLightbox
  // Kamu juga bisa menambahkan opsi-opsi lain di sini
});

// Inisialisasi Isotope
const grid = document.querySelector('.grid');
const iso = new Isotope(grid, {
  // Opsi konfigurasi Isotope
  itemSelector: '.grid-item',
  layoutMode: 'fitRows',
});

// Menggunakan imagesLoaded untuk memastikan gambar sudah dimuat
imagesLoaded(grid, function () {
  iso.layout(); // Setelah gambar termuat, panggil metode layout
});

// Inisialisasi PureCounter
const pure = new PureCounter();

