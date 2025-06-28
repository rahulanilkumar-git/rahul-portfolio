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
  // Inside custom.js
    const ctx = document.getElementById("skillsChart").getContext("2d");
    new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ["Laravel", "JS", "PHP", "Python", "SQL", "Git"],
        datasets: [{
        label: "Skill Level",
        data: [95, 90, 95, 85, 85, 90],
        backgroundColor: "rgba(0, 123, 255, 0.15)",
        borderColor: "#007bff",
        borderWidth: 2
        }]
    },
    options: {
        responsive: false,
        scales: {
        r: {
            suggestedMin: 50,
            suggestedMax: 100,
            pointLabels: {
            font: { size: 12 }
            }
        }
        }
    }
    });

});
