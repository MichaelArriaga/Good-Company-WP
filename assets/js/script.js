function scrollTo(element) {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
}

document.getElementById("contact").addEventListener('click', () => {
  scrollTo(document.getElementById("contact-form"));
});
