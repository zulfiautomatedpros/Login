  <script>
    // Toggle password visibility
    document.querySelector('button[type="button"]').addEventListener('click', function() {
      const passwordInput = document.getElementById('password');
      const icon = this.querySelector('img');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.src = 'assets/images/open-eye.webp';
      } else {
        passwordInput.type = 'password';
        icon.src = 'assets/images/close-eye.webp';
      }
    });
  </script>
</body>
</html>
