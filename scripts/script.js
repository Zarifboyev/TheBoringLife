// Menyu tugmasi va navbar funksionalligining xatolarni boshqarish bilan ishlashi
document.addEventListener("DOMContentLoaded", () => {
    // DOM elementlarini nol tekshiruvi bilan oling
    const menu = document.querySelector('#menu-btn');
    const navbar = document.querySelector('.header .navbar');

    if (!menu || !navbar) {
        console.warn('Menyu tugmasi yoki navigatsiya paneli topilmadi');
        return;
    }

    // Menyu bosish boshqaruvchisi
    menu.addEventListener('click', () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    });

    // Aylantirishni boshqaruvchi
    window.addEventListener('scroll', () => {
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    });

   
    // Bosh sahifa slayderi ishga tushirilishi
    if (document.querySelector('.home-slider')) {
            const homeSwiper = new Swiper(".home-slider", {
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-prev",
                    prevEl: ".swiper-button-next"
                }
            });
        }

  

    // Ko‘proq funksiyalarni yuklash
    const loadMoreBtn = document.querySelector('.packages .load-more .btn');
    if (!loadMoreBtn) {
        console.warn('Ko‘proq yuklash tugmasi topilmadi');
        return;
    }

    let currentItem = 3;
    
    loadMoreBtn.addEventListener('click', () => {
        try {
            const boxes = Array.from(document.querySelectorAll('.packages .box-container .box'));
            
            if (!boxes.length) {
                console.warn('Hech qanday paket qutisi topilmadi');
                loadMoreBtn.style.display = 'none';
                return;
            }

            // Keyingi elementlar to‘plamini ko‘rsating
            for (let i = currentItem; i < Math.min(currentItem + 3, boxes.length); i++) {
                boxes[i].style.display = 'inline-block';
            }

            currentItem += 3;

            // Barcha elementlar ko‘rsatilganda, yashirish tugmasini berkiting
            if (currentItem >= boxes.length) {
                loadMoreBtn.style.display = 'none';
            }
        } catch (error) {
            console.error("Ko‘proq yuklash funksiyasida xatolik:", error);
        }
    });
});