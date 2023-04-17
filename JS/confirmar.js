const form = document.querySelector('form');
const pass1 = document.querySelector('input[name="contrasena"]');
const pass2 = document.querySelector('input[name="confirmar_contrasena"]');
const error = document.getElementById('error-contrasena');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  if (pass1.value !== pass2.value) {
    error.textContent = 'Las contraseñas no coinciden.';
    error.style.display = 'inline-block';
    pass2.classList.add('errorp');
  } else if (pass1.value.length < 8 || !/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(pass1.value)) {
    error.textContent = 'La contraseña debe tener al menos 8 caracteres y un carácter especial.';
    error.style.display = 'inline-block';
    pass2.classList.add('errorp');
  } else {
    error.style.display = 'none';
    pass2.classList.remove('errorp');
    form.submit();
  }
});
