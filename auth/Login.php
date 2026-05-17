<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modern Auth UI</title>

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <!-- Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"
  >
  <link rel="stylesheet" href="../assets/css/style.css">
  
</head>

<body>

  <div class="auth-wrapper">

    <div class="auth-card row g-0">

      <!-- LEFT SIDE -->
      <div class="col-lg-6 left-side d-flex flex-column justify-content-center">

        <div class="brand">
          Code <span style="color: var(--amber);">Academix</span>
        </div>

        <h1 class="left-title">
          Welcome to the Future of Learning 
        </h1>

        <p class="left-text">
        Expert-led courses in tech, design, and business — built for real outcomes, not just certificates. Join 42,000+ learners already growing.
        </p>

      </div>

      <!-- RIGHT SIDE -->
      <div class="col-lg-6 right-side">
        <!-- LOGIN FORM -->
        <div class="login-form">

          <h2 class="form-title">
            Welcome Back 👋
          </h2>

          <p class="form-subtitle">
            Login to continue your journey.
          </p>

          <form>

            <div class="input-box">
              <i class="bi bi-envelope"></i>
              <input type="email" class="form-control" placeholder="Email Address">
            </div>

            <div class="input-box">
              <i class="bi bi-lock"></i>
              <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="extra">
              <div>
                <input type="checkbox">
                Remember me
              </div>

              <a href="#">Forgot Password?</a>
            </div>

            <button class="auth-btn">
              Login
            </button>

          </form>
        </div>
      </div>

    </div>

  </div>

  <script>
    const loginTab = document.getElementById("loginTab");
    const signupTab = document.getElementById("signupTab");

    const loginForm = document.querySelector(".login-form");
    const signupForm = document.querySelector(".signup-form");

    loginTab.addEventListener("click", () => {

      loginTab.classList.add("active");
      signupTab.classList.remove("active");

      loginForm.style.display = "block";
      signupForm.style.display = "none";

    });

    signupTab.addEventListener("click", () => {

      signupTab.classList.add("active");
      loginTab.classList.remove("active");

      signupForm.style.display = "block";
      loginForm.style.display = "none";

    });

  </script>
</body>
</html>