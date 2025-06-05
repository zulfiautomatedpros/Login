<?php include 'includes/header.php'; ?>
<div class="h-screen w-screen grid grid-cols-1 lg:grid-cols-[1fr_2fr] bg-[linear-gradient(67.75deg,_#FFFFFF_19.18%,_#FFEBE7_75.31%)] overflow-y-auto lg:overflow-hidden">
  <!-- LEFT PANEL -->
  <div class="hidden lg:flex relative flex-col justify-end min-h-[96vh] rounded-3xl overflow-hidden bg-cover bg-center pt-10 pl-10 pb-10"
       style="background-image: url('assets/images/background.webp');">
    <!-- Orange overlay -->
    <div class="absolute inset-0 bg-[#FF5634] opacity-50 rounded-3xl z-0"></div>
    <!-- Black gradient overlay -->
    <div class="absolute inset-0 rounded-3xl z-10"
         style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, #000 50%, #000 100%); opacity: 0.5;"></div>
    <!-- Logo absolutely at top left, with padding -->
    <div class="absolute top-10 left-10 z-20">
      <img src="assets/images/third.webp" alt="Orderific Logo" class="w-[168px] h-[59px]" />
    </div>
    <!-- Content at bottom, with bottom padding -->
    <div class="relative z-20 flex flex-col gap-8 h-full justify-end pr-10">
      <div>
        <h1 class="text-white font-bold text-[clamp(2.2rem,4vw,3.5rem)] leading-tight mb-4">Simplifying Restaurant Management</h1>
        <p class="text-white text-base max-w-[90%]">Streamline your restaurant operations with BMS. Manage reservations, orders, inventory, and staff effortlessly, and focus on delivering exceptional dining experiences.</p>
      </div>
    </div>
  </div>
  <!-- RIGHT PANEL -->
  <div class="flex flex-col justify-center items-center w-full h-full overflow-y-auto lg:overflow-hidden bg-none lg:bg-none bg-[linear-gradient(33.85deg,_#FDE8E4_37.88%,_#ECECEC_73.61%)] lg:bg-transparent relative">
    <!-- Sticky mobile logo at the very top, only on small screens -->
    <div class="block lg:hidden top-0 z-30 w-full flex justify-center bg-[linear-gradient(67.75deg,_#FFFFFF_19.18%,_#FFEBE7_75.31%)] pt-8 pb-2">
      <img src="assets/images/logo.webp" alt="Orderific Logo" class="h-14 w-auto" />
    </div>
    <div class="w-full max-w-[400px] mx-auto px-4 sm:px-0 pt-4 lg:pt-0">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-black mb-2">Welcome Back</h2>
        <p class="text-gray-600">Manage, streamline, and thrive effortlessly.</p>
      </div>
      <!-- Social Login Buttons -->
      <div class="space-y-4 mb-8">
        <button type="button" class="w-full flex items-center justify-center px-4 h-12 border border-gray-300 rounded-[32px] bg-white font-semibold text-black text-base hover:bg-gray-50 transition-colors">
          <img src="assets/images/google.webp" alt="Google" class="w-5 h-5 mr-3" />
          <span>Continue with Google</span>
        </button>
        <button type="button" class="w-full flex items-center justify-center px-4 h-12 border border-gray-300 rounded-[32px] bg-white font-semibold text-black text-base hover:bg-gray-50 transition-colors">
          <img src="assets/images/facebook.webp" alt="Facebook" class="w-5 h-5 mr-3" />
          <span>Continue with FB</span>
        </button>
      </div>
      <!-- Separator with OR -->
      <div class="relative flex items-center justify-center mb-8">
        <div class="flex-1 border-t border-gray-300"></div>
        <span class="px-4 text-sm text-gray-500">Or</span>
        <div class="flex-1 border-t border-gray-300"></div>
      </div>
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="font-bold text-[13px] leading-[16px] text-[rgba(26,26,26,0.6)] mb-1 ml-1 text-left">Email</label>
          <input id="email" name="email" type="email" class="form-input rounded-[32px] h-12 px-5 border border-gray-300 text-base font-normal bg-white focus:ring-2 focus:ring-[#FF5634] focus:border-[#FF5634]" placeholder="samsmith@gmail.com" required />
        </div>
        <div>
          <label for="password" class="font-bold text-[13px] leading-[16px] text-[rgba(26,26,26,0.6)] mb-1 ml-1 text-left">Password</label>
          <div class="relative">
            <input id="password" name="password" type="password" class="form-input rounded-[32px] h-12 px-5 border border-gray-300 text-base font-normal bg-white focus:ring-2 focus:ring-[#FF5634] focus:border-[#FF5634] pr-10" placeholder="Password" required />
            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center">
              <img src="assets/images/close-eye.webp" alt="Toggle Password" class="w-5 h-5" />
            </button>
          </div>
        </div>
        <div class="flex items-center justify-between">
          <label class="flex items-center">
            <input type="checkbox" id="rememberMe" name="rememberMe" class="h-4 w-4 text-[#FF5634] rounded border-gray-300" />
            <span class="font-normal text-base leading-5 tracking-[-0.01em] text-[#1A1A1A] ml-2">Remember me</span>
          </label>
          <a href="#" class="text-black underline font-semibold">Forgot Password</a>
        </div>
        <button type="submit" class="w-full h-12 bg-black text-white rounded-[32px] font-bold text-lg transition-colors">Sign In</button>
        <div class="text-center">
          <span class="text-gray-600">Don't have an account?</span>
          <a href="#" class="text-black underline font-semibold ml-1">Sign Up</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?> 