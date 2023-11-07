console.log('test');


// ページの全コンテンツがロードされた後にプリローダーを非表示にする
window.onload = function() {
  // プリローダーアニメーション
  let preloader = document.getElementById('preloader');
  preloader.style.display = 'none';
};



document.addEventListener('DOMContentLoaded', function() {
    // プリローダーアニメーション
    let preloader = document.getElementById('preloader');

      // ページの全ての要素が読み込まれた後にプリローダーを非表示にする
  window.onload = function() {
    preloader.style.display = 'none';
  };

    // ＊テスト用コード＊3秒後に要素が読み込まれた後にプリローダーを非表示にする
    // window.onload = function() {
    //   setTimeout(function() {
    //     preloader.style.display = 'none';
    //   }, 3000); // 3秒後に非表示
    // };

  // セクションの要素を取得
  const slideInRightElements = document.querySelectorAll('.slide-right-content');
  const slideInLeftElements = document.querySelectorAll('.slide-left-content');
  const slideInBottomElements = document.querySelectorAll('.slide-bottom-content');
  const slideInTopElements = document.querySelectorAll('.slide-top-content');
  const fadeInElements = document.querySelectorAll('.fade-in-content');

  // アニメーションをトリガーする関数
  function triggerAnimation(element, className) {
    if (!element) return;

    const sectionTop = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop <= (windowHeight)) {
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
  fadeInElements.forEach(element => {
    triggerAnimation(element, 'fade-in');
  });
});
});
