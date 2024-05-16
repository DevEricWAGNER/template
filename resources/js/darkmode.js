// DARK MODE

// const sunIcon = document.querySelector("#sun");
// const moonIcon = document.querySelector("#moon");

// const dark_svg = document.querySelectorAll("#dark_svg");
// const light_svg = document.querySelectorAll("#light_svg");

// const dark_logo = document.querySelector("#dark_logo");
// const light_logo = document.querySelector("#light_logo");

// const userTheme = localStorage.getItem("theme");
// const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

// console.log(userTheme);

// const iconToggle = () => {
//     moonIcon.classList.toggle("hidden");
//     sunIcon.classList.toggle("hidden");
// };

// const themeCheck = () => {
//     if (userTheme === "dark" || (!userTheme && systemTheme)) {
//         document.documentElement.classList.add("dark");
//         moonIcon.classList.add("hidden");
//         if (window.innerWidth < 768) {
//             light_svg.forEach((svg) => svg.classList.add("hidden"));
//             dark_svg.forEach((svg) => svg.classList.remove("hidden"));
//         }
//         light_svg.forEach((svg) => svg.classList.add("hidden"));
//         return;
//     }
//     sunIcon.classList.add("hidden");
//     if (window.innerWidth < 768) {
//         dark_svg.forEach((svg) => svg.classList.add("hidden"));
//         light_svg.forEach((svg) => svg.classList.remove("hidden"));
//     }
//     dark_svg.forEach((svg) => svg.classList.add("hidden"));
// };

// const themeSwitch = () => {
//     if (document.documentElement.classList.contains("dark")) {
//         document.documentElement.classList.remove("dark");
//         localStorage.setItem("theme", "light");
//         if (window.innerWidth < 768) {
//             light_svg.forEach((svg) => svg.classList.remove("hidden"));
//             dark_svg.forEach((svg) => svg.classList.add("hidden"));
//         }
//         console.log(localStorage.getItem("theme"));
//         iconToggle();
//         return;
//     }
//     document.documentElement.classList.add("dark");
//     localStorage.setItem("theme", "dark");
//     if (window.innerWidth < 768) {
//         light_svg.forEach((svg) => svg.classList.add("hidden"));
//         dark_svg.forEach((svg) => svg.classList.remove("hidden"));
//     }
//     console.log(localStorage.getItem("theme"));
//     iconToggle();
// };

// sunIcon.addEventListener("click", themeSwitch);
// moonIcon.addEventListener("click", themeSwitch);

// themeCheck();
