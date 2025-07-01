const header = document.querySelector('.js-header');
const resume = document.querySelector('.js-resume');

if (resume) {
  initHeader(header);
  window.addEventListener('scroll', () => {
    initHeader(header);
  });
}


function initHeader(){
  if (isDivAtTop(header)) {
    header.classList.add('header--top');
  } else {
    header.classList.remove('header--top');
  }
  if (isDivAtBottom(resume)) {
    header.classList.remove('header--top');
  }
}

function isDivAtTop(div) {
  const rect = div.getBoundingClientRect();
  return rect.top <= 0;
}

function isDivAtBottom(div) {
  const rect = div.getBoundingClientRect();
  return rect.bottom >= 0;
}