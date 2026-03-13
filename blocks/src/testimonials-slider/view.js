document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".ecs-testimonials-slider-block");

  if (!slider) return;

  const slides = slider.querySelectorAll(".ecs-testimonial-slide");
  const prevBtn = slider.querySelector(".ecs-testimonials-nav-prev");
  const nextBtn = slider.querySelector(".ecs-testimonials-nav-next");
  const total = slides.length;
  let current = 0;

  const showSlide = (index) => {
    slides[current].style.opacity = "0";

    setTimeout(() => {
      slides[current].classList.remove("is-active");
      slides[index].classList.add("is-active");

      setTimeout(() => {
        slides[index].style.opacity = "1";
      }, 20);

      current = index;
    }, 300);
  };

  showSlide(current);

  nextBtn.addEventListener("click", () => {
    if (current === total - 1) {
      showSlide(0);
    } else {
      showSlide(current + 1);
    }
  });

  prevBtn.addEventListener("click", () => {
    if (current === 0) {
      showSlide(total - 1);
    } else {
      showSlide(current - 1);
    }
  });
});
