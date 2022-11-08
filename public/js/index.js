// HEADER HOME

const imgSlider = (anything) => {
  document.querySelector('.content__img').src = anything;
}

const changeCirclecolor = (color) => {
  const circle = document.querySelector('.header__circle');
  circle.style.background = color;
}