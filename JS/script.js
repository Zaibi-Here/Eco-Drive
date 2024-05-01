const orderBtns = document.querySelectorAll('.order-btn');
const demoBtns = document.querySelectorAll('.demo-btn');
const signUpBtn = document.querySelector('.signup');

function addHoverEffect(button) {
  button.addEventListener('mouseenter', () => {
    button.style.transform = 'scale(1.1)';
  });
  button.addEventListener('mouseleave', () => {
    button.style.transform = 'scale(1)';
  });
}

orderBtns.forEach(btn => {
  addHoverEffect(btn);
  btn.addEventListener('click', () => {
    window.location.href = 'product.html';
  });
});

demoBtns.forEach(btn => {
  addHoverEffect(btn);
  btn.addEventListener('click', () => {
    window.location.href = 'product.html';
  });
});

addHoverEffect(signUpBtn);
