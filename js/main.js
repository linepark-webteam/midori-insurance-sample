console.log('test');

document.addEventListener('DOMContentLoaded', function() {
  // プリローダーアニメーション
  let preloader = document.getElementById('preloader');
      preloader.style.display = 'none';
  // セクションの要素を取得
  const slideInRightElements = document.querySelectorAll('.slide-right-content');
  const slideInLeftElements = document.querySelectorAll('.slide-left-content');
  const slideInBottomElements = document.querySelectorAll('.slide-bottom-content');
  const slideInTopElements = document.querySelectorAll('.slide-top-content');
  const slideInElements = document.querySelectorAll('.slide-in');
  const fadeInElements = document.querySelectorAll('.fade-in-content');

  // アニメーションをトリガーする関数
  function triggerAnimation(element, className) {
    if (!element) return;

    const sectionTop = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop <= (windowHeight / 2)) {
        element.classList.add(className);
        element.classList.add('visible');
    }
}


window.addEventListener('scroll', function() {
  slideInRightElements.forEach(element => {
    triggerAnimation(element, 'slide-in-right');
  });
  slideInLeftElements.forEach(element => {
    triggerAnimation(element, 'slide-in-left');
  });
  slideInTopElements.forEach(element => {
    triggerAnimation(element, 'slide-in-top');
  });
  slideInBottomElements.forEach(element => {
    triggerAnimation(element, 'slide-in-bottom');
  });
  slideInElements.forEach(element => {
    triggerAnimation(element, 'slide-in');
  });
  fadeInElements.forEach(element => {
    triggerAnimation(element, 'fade-in');
  });
});
});
