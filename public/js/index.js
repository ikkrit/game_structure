// HEADER HOME

const imgSlider = (anything) => {
  document.querySelector('.content__img').src = anything;
};

const changeCirclecolor = (color) => {
  const circle = document.querySelector('.header__circle');
  circle.style.background = color;
};

const toggleMenu = () => {
  let menuToggle = document.querySelector('.header__toggle');
  let navigation = document.querySelector('.header__navigation');

  menuToggle.classList.toggle('active');
  navigation.classList.toggle('active');
};