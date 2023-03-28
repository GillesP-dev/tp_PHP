
const form = document.querySelector('form');


form.addEventListener('submit', (event) => {
  
  event.preventDefault();

  
  const fileInput = document.querySelector('input[type="file"]');
  const file = fileInput.files[0];
  console.log(file);

  
  const allowedExtensions = ['.jpg', '.jpeg', '.png'];
  const maxFileSize = 3145728; 
  const fileExtension = file.name.split('.').pop();
  const fileSize = file.size;

  if (!allowedExtensions.includes(fileExtension) || fileSize > maxFileSize) {
    
    alert('Erreur : le fichier doit être une image au format JPG, PNG ou GIF et ne doit pas dépasser 3 Mo.');

    
    fileInput.value = '';
    form.reset();
  } else {
    
    form.submit();
  }
});
