// js/app.js

document.addEventListener("DOMContentLoaded", function () {
  // プリローダーアニメーション
  let preloader = document.getElementById("preloader");

  // ページの全ての要素が読み込まれた後にプリローダーを非表示にする
  window.onload = function () {
    preloader.style.display = "none";
  };

  // セクションの要素を取得
  const slideInRightElements = document.querySelectorAll(
    ".slide-right-content"
  );
  const slideInLeftElements = document.querySelectorAll(".slide-left-content");
  const slideInBottomElements = document.querySelectorAll(
    ".slide-bottom-content"
  );
  const slideInTopElements = document.querySelectorAll(".slide-top-content");
  const fadeInElements = document.querySelectorAll(".fade-in-content");

  // アニメーションをトリガーする関数
  function triggerAnimation(element, className) {
    if (!element) return;

    const sectionTop = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop <= windowHeight) {
      element.classList.add(className);
      element.classList.add("visible");
    }
  }

  window.addEventListener("scroll", function () {
    slideInRightElements.forEach((element) => {
      triggerAnimation(element, "slide-in-right");
    });
    slideInLeftElements.forEach((element) => {
      triggerAnimation(element, "slide-in-left");
    });
    slideInTopElements.forEach((element) => {
      triggerAnimation(element, "slide-in-top");
    });
    slideInBottomElements.forEach((element) => {
      triggerAnimation(element, "slide-in-bottom");
    });
    fadeInElements.forEach((element) => {
      triggerAnimation(element, "fade-in");
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.getElementById("navbarNav");
  const toggler = document.querySelector(".navbar-toggler");

  function isMobileNav() {
    return toggler && window.getComputedStyle(toggler).display !== "none";
  }

  function closeNavbarIfOpen() {
    if (!navbarCollapse) return;
    const instance =
      bootstrap.Collapse.getInstance(navbarCollapse) ||
      new bootstrap.Collapse(navbarCollapse, { toggle: false });
    instance.hide();
  }

  // 「閉じる」の対象を“遷移するリンク”に限定
  document.querySelectorAll("#navbarNav a").forEach((a) => {
    a.addEventListener("click", (e) => {
      // 1) ドロップダウンの“開閉トグル”は除外
      const isDropdownToggle =
        a.classList.contains("dropdown-toggle") ||
        a.getAttribute("data-bs-toggle") === "dropdown";

      if (isDropdownToggle) {
        // ドロップダンを開く操作なので、閉じない
        return;
      }

      // 2) 実際に遷移するリンクか判定（#のみ / javascript: は除外）
      const href = a.getAttribute("href") || "";
      const navigates =
        href && href !== "#" && !href.toLowerCase().startsWith("javascript:");

      if (isMobileNav() && navigates) {
        closeNavbarIfOpen();
      }
    });
  });
});
