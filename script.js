// 🟢 Slide-In bei Page Load (Logo & Nav)
window.addEventListener("DOMContentLoaded", () => {
  const logo = document.querySelector(".floating-logo");
  const navBtns = document.querySelectorAll(".nav-btn");

  if (logo) {
    logo.style.opacity = "0";
    logo.style.transform = "translateX(-60px)";
    setTimeout(() => {
      logo.style.transition = "all 0.8s ease";
      logo.style.opacity = "1";
      logo.style.transform = "translateX(0)";
    }, 100);
  }

  navBtns.forEach((btn, i) => {
    btn.style.opacity = "0";
    btn.style.transform = "translateX(60px)";
    setTimeout(() => {
      btn.style.transition = "all 0.7s ease";
      btn.style.opacity = "1";
      btn.style.transform = "translateX(0)";
    }, 200 + i * 150);
  });
});

// 🔍 Scroll-Effekt für sichtbare Sektionen
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.1
});

document.querySelectorAll('.card, .praxis, .cta, .kontakt, .footer, .faq-block').forEach(el => {
  el.classList.add('hidden');
  observer.observe(el);
});

// 🛠 Hero bei DOMContentLoaded direkt sichtbar machen
document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".hero");
  if (hero) {
    hero.classList.remove("hidden");
    hero.classList.add("visible");
  }
});

// 🍔 Burger-Menü Toggle
document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav");

  if (burger && nav) {
    burger.addEventListener("click", () => {
      nav.classList.toggle("open");
    });
  }
});