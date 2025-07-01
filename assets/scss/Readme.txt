The .scss (Sass) files are only available in the pro version.
You can buy it from: https://bootstrapmade.com/herobiz-bootstrap-business-template/


  const tabButtons = document.querySelectorAll(".tab-button");
  const tabContents = document.querySelectorAll(".tab-content");
  const faqContents = document.querySelectorAll(".faq-content");
  const courseItems = document.querySelectorAll(".course-item");

  // ✅ Course Data with Enrollment Links
  const courseData = {
    "enrolled-agent": {
      title: "Enrolled Agent",
      description: "Unlock Global Opportunities in Management Accounting",
      image: "assets/img/pen.webp",
      faqId: "faq-enrolled-agent",
      enrollLink: "ea.html",
    },
    "certified-management-accountant": {
      title: "Certified Management Accountant",
      description: "Master financial strategies & global business practices.",
      image: "assets/img/cma.webp",
      faqId: "faq-certified-management-accountant",
      enrollLink: "cma.html",
    },
    "certified-public-accountant": {
      title: "Certified Public Accountant",
      description: "Develop skills in auditing, taxation & business law.",
      image: "assets/img/cpa.webp",
      faqId: "faq-certified-public-accountant",
      enrollLink: "cpa.html",
    },
    acca: {
      title: "ACCA",
      description: "Gain expertise in financial management & accounting.",
      image: "assets/img/acca.webp",
      faqId: "faq-acca",
      enrollLink: "acca.html",
    },
    "web-development": {
      title: "Web Development",
      description:
        "Learn frontend & backend development with hands-on projects.",
      image: "assets/img/it.webp",
      faqId: "faq-web-development",
      enrollLink: "web-development.html",
    },
    "full-stack-development": {
      title: "Full Stack Development",
      description: "Learn MERN stack & build scalable web applications.",
      image: "assets/img/fcp.webp",
      faqId: "faq-full-stack-development",
      enrollLink: "full-stack-development.html",
    },
    "ui-ux-designing": {
      title: "UI/UX Designing",
      description: "Master Figma, user research, and design principles.",
      image: "assets/img/uiux.webp",
      faqId: "faq-ui-ux-designing",
      enrollLink: "uiux.html",
    },
    "first-career-program": {
      title: "First Career Program",
      description: "Develop essential skills for career growth.",
      image: "assets/img/upskilling.webp",
      faqId: "faq-upskilling",
      enrollLink: "fcp.html",
    },
  };
  // Function to handle FAQ transitions with a slower animation
  function switchFAQ(courseName) {
    const course = courseData[courseName];
    if (!course) return; // Prevent errors if course not found

    const newFaqId = course.faqId;
    const currentActiveFaq = document.querySelector(".faq-content.active");
    const selectedFaq = document.getElementById(newFaqId);

    if (selectedFaq && currentActiveFaq !== selectedFaq) {
      // Prepare the new FAQ for transition
      selectedFaq.style.position = "absolute";
      selectedFaq.style.top = "0";
      selectedFaq.style.left = "0";
      selectedFaq.style.width = "100%";
      selectedFaq.style.zIndex = "10";
      selectedFaq.style.opacity = "0";
      selectedFaq.style.transform = "translateY(500px)";
      selectedFaq.style.transition =
        "opacity 1s ease-in-out, transform 1.3s ease-in-out";

      // Add active class before animation starts
      selectedFaq.classList.add("active");

      // Delay transition start to ensure overlapping effect
      setTimeout(() => {
        selectedFaq.style.opacity = "1";
        selectedFaq.style.transform = "translateY(0)";
      }, 50);

      // Remove previous active FAQ after transition
      setTimeout(() => {
        if (currentActiveFaq) {
          currentActiveFaq.classList.remove("active");
          currentActiveFaq.style.opacity = "";
          currentActiveFaq.style.transform = "";
        }

        // Reset new FAQ to normal positioning
        selectedFaq.style.position = "";
        selectedFaq.style.zIndex = "";
        selectedFaq.style.width = "";
      }, 1500); // Matches transition duration

      // Update Course Data (Title, Description, Image)
      updateCourseDetails(courseName);
    }
  }

  function updateCourseDetails(courseName) {
    const course = courseData[courseName];
    if (!course) return;

    const activeTab = document.querySelector(".tab-content.active");
    if (!activeTab) return;

    const cardTitle = activeTab.querySelector(".card-content h3");
    const cardDescription = activeTab.querySelector(".card-content p");
    const cardImage = activeTab.querySelector(".card-content img");
    const enrollButton = activeTab.querySelector(".styled-button");

    if (cardTitle && cardDescription && cardImage && enrollButton) {
      cardTitle.textContent = course.title;
      cardDescription.textContent = course.description;
      cardImage.src = course.image;
      enrollButton.href = course.enrollLink;
    }
  }

  function activateCourseItem(courseName) {
    switchFAQ(courseName);

    document.querySelectorAll(".course-item").forEach((item) => {
      item.classList.remove("active");
    });

    const selectedCourseItem = Array.from(
      document.querySelectorAll(".course-item")
    ).find(
      (item) =>
        item.textContent
          .trim()
          .toLowerCase()
          .replace(/\s+/g, "-")
          .replace(/\//g, "-") === courseName
    );

    if (selectedCourseItem) {
      selectedCourseItem.classList.add("active");
    }
  }

  function handleTabClick(button) {
    tabButtons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");

    const targetTab = button.dataset.tab;
    tabContents.forEach((content) => {
      content.classList.remove("active");
      if (content.id === targetTab) {
        content.classList.add("active");
      }
    });

    if (targetTab === "accounting") {
      activateCourseItem("enrolled-agent");
    } else if (targetTab === "upskilling") {
      activateCourseItem("first-career-program");
    } else if (targetTab === "it-courses") {
      activateCourseItem("web-development");
    }
  }

  tabButtons.forEach((button) => {
    button.addEventListener("click", () => handleTabClick(button));
  });

  courseItems.forEach((item) => {
    item.addEventListener("click", () => {
      let courseName = item.textContent
        .trim()
        .toLowerCase()
        .replace(/\s+/g, "-")
        .replace(/\//g, "-");
      activateCourseItem(courseName);
    });
  });

  // ✅ Set Default Active Tab and Course on Page Load
  document
    .querySelector(".tab-button[data-tab='accounting']")
    .classList.add("active");
  document.querySelector(".tab-content#accounting").classList.add("active");
  activateCourseItem("enrolled-agent");

// Handle tab switching
tabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Remove active class from all buttons
    tabButtons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");

    // Hide all training content and show the selected one
    const targetTab = button.dataset.tab;
    tabContents.forEach((content) => {
      content.classList.remove("active");
      if (content.id === targetTab) {
        content.classList.add("active");
      }
    });

    // Switch FAQ with animation
    switchFAQ(targetTab);
  });
});

// Handle course list item click
courseItems.forEach((item) => {
  item.addEventListener("click", () => {
    let courseName = item.textContent.trim().toLowerCase();
    courseName = courseName.replace(/\s+/g, "-").replace(/\//g, "-");

    // Switch FAQ with animation
    switchFAQ(courseName);

    // Update card content
    const activeTab = document.querySelector(".tab-content.active");
    if (activeTab && courseData[courseName]) {
      const cardTitle = activeTab.querySelector(".card-content h3");
      const cardDescription = activeTab.querySelector(".card-content p");
      const cardImage = activeTab.querySelector(".card-content img");

      cardTitle.textContent = courseData[courseName].title;
      cardDescription.textContent = courseData[courseName].description;
      cardImage.src = courseData[courseName].image;
    }
  });
});

// Accordion functionality
document.querySelectorAll(".accordion").forEach((item) => {
  item.addEventListener("click", function () {
    // Close all other accordions
    document.querySelectorAll(".accordion").forEach((otherItem) => {
      if (otherItem !== this && otherItem.classList.contains("active")) {
        otherItem.classList.remove("active");
        otherItem.nextElementSibling.style.display = "none";
        otherItem.querySelector("span").textContent = "+";
      }
    });

    // Toggle the clicked accordion
    this.classList.toggle("active");
    let content = this.nextElementSibling;
    let symbol = this.querySelector("span");

    if (this.classList.contains("active")) {
      content.style.display = "block";
      symbol.textContent = "-";
    } else {
      content.style.display = "none";
      symbol.textContent = "+";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const courseItems = document.querySelectorAll(".course-item");

  courseItems.forEach((item) => {
    item.addEventListener("click", () => {
      // Remove active class from all course items
      courseItems.forEach((el) => el.classList.remove("active"));

      // Add active class to the clicked item
      item.classList.add("active");
    });
  });
});

====================================================================

      <style>
        .blue-circle:hover + .instructor-card {
          background-color: #d9e7f8;
        }          </style>
        <script>
          document.querySelectorAll('.blue-circle').forEach(circle => {
          circle.addEventListener('mouseenter', () => {
            circle.closest('.instructor-card').style.backgroundColor = '#d9e7f8';
          });
          
          circle.addEventListener('mouseleave', () => {
            circle.closest('.instructor-card').style.backgroundColor = '';
          });
        });
        </script>
