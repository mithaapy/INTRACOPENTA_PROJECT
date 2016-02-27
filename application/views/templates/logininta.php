<style>

</style>
<body>
<!--
Inspired by http://dribbble.com/shots/917819-iPad-Calendar-Login?list=shots&sort=views&timeframe=ever&offset=461
-->
<div class="container">
       <div class="signin-container">

    <!-- Left side -->
    <div class="signin-info">
      <a href="index.html" class="logo">
        <img src="assets/demo/logo-big.png" alt="" style="margin-top: -5px;">&nbsp;
        PixelAdmin
      </a> <!-- / .logo -->
      <div class="slogan">
        Simple. Flexible. Powerful.
      </div> <!-- / .slogan -->
      <ul>
        <li><i class="fa fa-sitemap signin-icon"></i> Flexible modular structure</li>
        <li><i class="fa fa-file-text-o signin-icon"></i> LESS &amp; SCSS source files</li>
        <li><i class="fa fa-outdent signin-icon"></i> RTL direction support</li>
        <li><i class="fa fa-heart signin-icon"></i> Crafted with love</li>
      </ul> <!-- / Info list -->
    </div>
    <!-- / Left side -->

    <!-- Right side -->
    <div class="signin-form">

      <!-- Form -->
      <form action="index.html" id="signin-form_id" novalidate="novalidate">
        <div class="signin-text">
          <span>Sign In to your account</span>
        </div> <!-- / .signin-text -->

        <div class="form-group w-icon">
          <input type="text" name="signin_username" id="username_id" class="form-control input-lg" placeholder="Username or email">
          <span class="fa fa-user signin-form-icon"></span>
        </div> <!-- / Username -->

        <div class="form-group w-icon">
          <input type="password" name="signin_password" id="password_id" class="form-control input-lg" placeholder="Password">
          <span class="fa fa-lock signin-form-icon"></span>
        </div> <!-- / Password -->

        <div class="form-actions">
          <input type="submit" value="SIGN IN" class="signin-btn bg-primary">
          <a href="#" class="forgot-password" id="forgot-password-link">Forgot your password?</a>
        </div> <!-- / .form-actions -->
      </form>
      <!-- / Form -->

      <!-- "Sign In with" block -->
      <div class="signin-with">
        <!-- Facebook -->
        <a href="index.html" class="signin-with-btn" style="background:#4f6faa;background:rgba(79, 111, 170, .8);">Sign In with <span>Facebook</span></a>
      </div>
      <!-- / "Sign In with" block -->

      <!-- Password reset form -->
      <div class="password-reset-form" id="password-reset-form">
        <div class="header">
          <div class="signin-text">
            <span>Password reset</span>
            <div class="close">×</div>
          </div> <!-- / .signin-text -->
        </div> <!-- / .header -->
        
        <!-- Form -->
        <form action="index.html" id="password-reset-form_id" novalidate="novalidate">
          <div class="form-group w-icon">
            <input type="text" name="password_reset_email" id="p_email_id" class="form-control input-lg" placeholder="Enter your email">
            <span class="fa fa-envelope signin-form-icon"></span>
          </div> <!-- / Email -->

          <div class="form-actions">
            <input type="submit" value="SEND PASSWORD RESET LINK" class="signin-btn bg-primary">
          </div> <!-- / .form-actions -->
        </form>
        <!-- / Form -->
      </div>
      <!-- / Password reset form -->
    </div>
    <!-- Right side -->
  </div>
</body>