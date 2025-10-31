(function () {
  const init = () => {
    const filterButtons = document.querySelectorAll(
      ".portfolio-filter-btn",
    );
    const portfolioItems = document.querySelectorAll(".portfolio-item");

    if (filterButtons.length > 0) {
      filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
          const category = button.getAttribute("data-category");

          filterButtons.forEach((btn) => {
            btn.classList.remove("bg-blue-500", "text-white");
            btn.classList.add(
              "bg-white",
              "text-gray-900",
              "border",
              "border-gray-200",
            );
          });

          button.classList.add("bg-blue-500", "text-white");
          button.classList.remove(
            "bg-white",
            "text-gray-900",
            "border",
            "border-gray-200",
          );

          portfolioItems.forEach((item) => {
            const itemCategory = item.getAttribute("data-category");
            if (
              category === "wszystkie" ||
              itemCategory === category
            ) {
              item.style.display = "block";
              setTimeout(() => {
                item.style.opacity = "1";
                item.style.transform = "scale(1)";
              }, 10);
            } else {
              item.style.opacity = "0";
              item.style.transform = "scale(0.95)";
              setTimeout(() => {
                item.style.display = "none";
              }, 300);
            }
          });
        });
      });

      portfolioItems.forEach((item) => {
        item.style.transition =
          "opacity 0.3s ease, transform 0.3s ease";
      });
    }

    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((checkbox) => {
      const updateCheckbox = () => {
        const svgIcon =
              checkbox.nextElementSibling?.querySelector("svg");
        if (svgIcon) {
          if (checkbox.checked) {
            svgIcon.classList.remove("hidden");
            checkbox.nextElementSibling.classList.add(
              "bg-blue-500",
              "border-blue-500",
            );
          } else {
            svgIcon.classList.add("hidden");
            checkbox.nextElementSibling.classList.remove(
              "bg-blue-500",
              "border-blue-500",
            );
          }
        }
      };

      checkbox.addEventListener("change", updateCheckbox);
      updateCheckbox();
    });

    const smoothScroll = (target) => {
      const element = document.querySelector(target);
      if (element) {
        element.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    };

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", (e) => {
        const href = anchor.getAttribute("href");
        if (href !== "#" && href.length > 1) {
          e.preventDefault();
          smoothScroll(href);
        }
      });
    });
  };

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();