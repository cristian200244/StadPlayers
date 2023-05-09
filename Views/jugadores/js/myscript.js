const inputImage = document.getElementById('inputImage');

inputImage.addEventListener('change', () => {
  const file = inputImage.files[0];
  const reader = new FileReader();

  reader.addEventListener('load', () => {
    // Aquí puedes trabajar con la imagen cargada
    const imageData = reader.result;
  });

  if (file) {
    reader.readAsDataURL(file);
  }
});
alert ("asasdsa");
