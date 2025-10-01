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
  const navbar     = document.querySelector(".navbar");
  const navbarColl = document.getElementById("navbarNav");
  const toggler    = document.querySelector(".navbar-toggler");

  function isMobileNav() {
    return toggler && window.getComputedStyle(toggler).display !== "none";
  }

  function getHeaderHeight() {
    return navbar ? navbar.getBoundingClientRect().height : 0;
  }

  function closeNavbarIfOpen() {
    if (!navbarColl) return null;
    const instance =
      bootstrap.Collapse.getInstance(navbarColl) ||
      new bootstrap.Collapse(navbarColl, { toggle: false });
    instance.hide();
    return instance;
  }

  function scrollWithOffset(hash) {
    const target = document.querySelector(hash);
    if (!target) return;
    const y = target.getBoundingClientRect().top + window.pageYOffset - getHeaderHeight() - 8;
    window.scrollTo({ top: y, behavior: "smooth" });
  }

  document.querySelectorAll("#navbarNav a").forEach((a) => {
    a.addEventListener("click", (e) => {
      // ドロップダウン開閉トグルは除外
      const isDropdownToggle =
        a.classList.contains("dropdown-toggle") ||
        a.getAttribute("data-bs-toggle") === "dropdown";
      if (isDropdownToggle) return;

      const href = a.getAttribute("href") || "";

      // ----------------------
      // 1) ページ内アンカーか判定
      // ----------------------
      const url = new URL(href, location.href); // 絶対URL化
      const samePage = url.pathname === location.pathname; // 同一ページか？
      const isHashOnly = url.hash && samePage; // 同一ページ + ハッシュあり

      // --- 同一ページ内のアンカーなら「閉じてからスクロール」 ---
      if (isHashOnly) {
        e.preventDefault();
        if (isMobileNav()) {
          closeNavbarIfOpen();
          navbarColl.addEventListener(
            "hidden.bs.collapse",
            () => {
              scrollWithOffset(url.hash);
              history.pushState(null, "", url.hash);
            },
            { once: true }
          );
        } else {
          scrollWithOffset(url.hash);
          history.pushState(null, "", url.hash);
        }
        return;
      }

      // ----------------------
      // 2) 通常のリンク遷移（他ページ含む）
      // ----------------------
      if (isMobileNav()) {
        closeNavbarIfOpen();
      }
      // → e.preventDefault() はしないので通常遷移OK
    });
  });

  // ----------------------
  // ページ読込時に #付きなら補正スクロール
  // ----------------------
  window.addEventListener("load", function () {
    if (location.hash) {
      setTimeout(() => scrollWithOffset(location.hash), 0);
    }
  });
});

