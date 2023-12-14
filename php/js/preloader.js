// preloader.js
const resources = [
  '../css/my-bootstrap.css',
  '../css/style.css',
  '../css/responsive.css',
  '../img/access2.webp',
];

let totalResources = resources.length;
let loadedResources = 0;

function updateProgress() {
  loadedResources++;
  let progressPercent = (loadedResources / totalResources) * 100;
  let progressRing = document.querySelector('.progress-ring__circle');
  if (!progressRing) return;

  let radius = progressRing.r.baseVal.value;
  let circumference = radius * 2 * Math.PI;

  progressRing.style.strokeDasharray = `${circumference} ${circumference}`;
  const offset = circumference - progressPercent / 100 * circumference;
  progressRing.style.strokeDashoffset = offset;

  progressRing.style.stroke = progressPercent === 100 ? 'green' : progressRing.style.stroke;

  if (loadedResources >= totalResources) {
    setTimeout(() => {
      let preloader = document.getElementById('preloader');
      if (preloader) preloader.style.display = 'none';
    }, 3000);
  }
}

resources.forEach((resource) => {
  fetch(resource).then(() => {
    updateProgress();
  }).catch(() => {
    updateProgress();
  });
});
