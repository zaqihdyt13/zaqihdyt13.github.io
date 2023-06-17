window.onscroll = () => {
  let header = document.querySelector(".navbar");

  header.classList.toggle("sticky", window.scrollY > 100);
};
