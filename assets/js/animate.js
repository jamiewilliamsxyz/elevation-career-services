const ecsFadeInEls = document.querySelectorAll(".ecs-fade-in");

const ecsFadeInOpts = {
  root: null,
  rootMargin: "0px",
  threshold: 0.012,
};

const ecsFadeInObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("ecs-in-view");
      observer.unobserve(entry.target);
    }
  });
}, ecsFadeInOpts);

ecsFadeInEls.forEach((section) => {
  ecsFadeInObserver.observe(section);
});
