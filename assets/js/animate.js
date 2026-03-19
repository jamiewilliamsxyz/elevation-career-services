const elements = document.querySelectorAll(".ecs-reveal");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("ecs-is-visible");
      }
    });
  },
  {
    threshold: 0.15,
  },
);

elements.forEach((el) => observer.observe(el));
