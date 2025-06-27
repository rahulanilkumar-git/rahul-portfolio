document.addEventListener("DOMContentLoaded", function () {
  // Typewriter Effect
  const text = "Full-Stack Developer | Laravel, PHP, JavaScript, Python";
  //const container = document.getElementById("typewriter-container");
  let i = 0;

  const container = document.getElementById("typewriter-container");
    if (container) {
    function type() {
        if (i < text.length) {
        container.innerHTML += text.charAt(i);
        i++;
        setTimeout(type, 60);
        } else {
        container.innerHTML += '<span class="cursor">|</span>';
        }
    }
    type();
    }

  // Dark Mode Toggle
  const toggleButton = document.getElementById("themeToggle");
  toggleButton.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
  });

  // Scroll reveal animations
  const sections = document.querySelectorAll("section");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("reveal");
      }
    });
  }, { threshold: 0.1 });

  sections.forEach(section => observer.observe(section));

  // Skills Radar Chart
  if (document.getElementById("skillsChart")) {
    const ctx = document.getElementById("skillsChart").getContext("2d");
    new Chart(ctx, {
      type: 'radar',
      data: {
        labels: ["Laravel", "JavaScript", "PHP", "Python", "SQL", "Git"],
        datasets: [{
          label: "Skill Level",
          data: [95, 90, 95, 80, 85, 90],
          backgroundColor: "rgba(0, 123, 255, 0.2)",
          borderColor: "blue",
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          r: {
            suggestedMin: 50,
            suggestedMax: 100
          }
        }
      }
    });
  }
});
