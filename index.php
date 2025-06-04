<?php include 'includes/header.php'; ?>
<div class="container">
  <!-- LEFT PANEL -->
  <div class="left-panel">
    <div class="introduction">
      <div class="bg1"></div>
      <div class="bg2"></div>
      <div class="logo-type4">
        <!-- Replace with your actual SVG or Logo image -->
        <img src="assets/images/third.png" alt="Orderific Logo" width="168" height="59" />
      </div>
      <div class="intro-content">
        <h1 class="big-title">Simplyfing Restaurant Management</h1>
        <p class="description">
          Streamline your restaurant operations with BMS. Manage reservations, orders, inventory, and staff effortlessly, and focus on delivering exceptional dining experiences.
        </p>
      </div>
    </div>
  </div>
  <!-- RIGHT PANEL -->
  <div class="right-panel">
    <!-- Tablet-only top section -->
    <div class="tablet-top-section">
      <div class="tablet-logo-wrap">
        <img src="assets/images/orderific.png" alt="Orderific Logo" class="tablet-logo" />
        <span class="tablet-logo-text">Orderific</span>
      </div>
    </div>
    <div class="sign-up-form">
      <div class="heading-block">
        <div class="heading">
          <h2 class="headline">Welcome Back</h2>
          <p class="subhead">Manage, streamline, and thrive effortlessly.</p>
        </div>
      </div>
      <!-- Social Login Buttons -->
      <div class="social-login-group">
        <button type="button" class="iconic-btn google-btn">
          <img src="assets/images/google.png" alt="Google" class="social-icon" />
          <span class="social-text"><strong>Continue with Google</strong></span>
        </button>
        <button type="button" class="iconic-btn facebook-btn">
          <img src="assets/images/facebook.png" alt="Facebook" class="social-icon" />
          <span class="social-text"><strong>Continue with FB</strong></span>
        </button>
      </div>
      <!-- Separator with OR -->
      <div class="separator">
        <div class="line"></div>
        <span class="or-text">Or</span>
        <div class="line"></div>
      </div>
      <form class="form-inputs" action="#" method="POST">
        <div class="standard-input">
          <div class="input-label">
            <label for="email" class="label-text">EMAIL</label>
          </div>
          <div class="text-field">
            <div class="input-content">
              <input id="email" name="email" class="value" type="email" placeholder="samsmith@gmail.com" required />
            </div>
          </div>
        </div>
        <div class="standard-input">
          <div class="input-label">
            <label for="password" class="label-text">PASSWORD</label>
          </div>
          <div class="text-field">
            <div class="input-content">
              <input id="password" name="password" class="value" type="password" placeholder="Password" required />
              <img src="assets/images/close-eye.png" alt="Toggle Password" class="icon" />
            </div>
          </div>
        </div>
        <div class="row-below">
          <div class="checkbox-item">
            <label class="checkbox-wrapper">
              <input type="checkbox" id="rememberMe" name="rememberMe" class="checkbox-control" />
              <span class="checkbox-symbol"></span>
              <span class="check-text">Remember me</span>
            </label>
          </div>
          <div class="simple-btn">
            <span class="simple-button">Forgot Password</span>
          </div>
        </div>
        <button type="submit" class="medium-btn">
          <span class="text-button">Sign In</span>
        </button>
        <!-- Separator below Sign In -->
        <div class="separator simple-separator"></div>
        <!-- Sign Up Link -->
        <div class="signup-link">
          <span>Don't have an account?</span>
          <a href="#" class="sign-up-link">Sign Up</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?> 