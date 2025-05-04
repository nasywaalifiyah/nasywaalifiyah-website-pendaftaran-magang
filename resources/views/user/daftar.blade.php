<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up - SIBIMTEK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="login.js">
  <style>
 /* General styling for larger screens */
body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f8f9fa;
}

.container {
  width: 100%;
  max-width: 1200px; /* Maximum width for large screens */
  margin: 0 auto;
  padding: 20px;
}

.left-section {
  background-color: #f8f9fa;
  height: 100vh; /* Full viewport height */
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0;
  box-sizing: border-box;
  overflow: hidden; /* Ensure no overflow happens */
}

.left-section img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* This ensures the image covers the section without distorting */
  margin: 0;
}

/* Responsive breakpoints for smaller screens */
@media (max-width: 1200px) {
  .container {
    padding: 15px;
  }

  .left-section img {
    max-height: 80vh;
  }
}

@media (max-width: 992px) {
  .left-section {
    padding: 0 10px; /* Adjust padding for medium screens */
  }

  .left-section img {
    max-height: 70vh; /* Decrease max height for better fitting on medium screens */
  }
}

@media (max-width: 768px) {
  .left-section {
    padding: 0 5px; /* Adjust padding for smaller screens */
  }

  .left-section img {
    max-height: 60vh; /* Further decrease max height */
  }
}

@media (max-width: 480px) {
  .left-section img {
    max-height: 50vh; /* Ensure the image doesn't become too large on very small screens */
  }
}

    .title {
      font-size: 2rem;
      font-weight: bold;
      color: #0D2B6B;
      margin-top: 50px;
    }

    .title span {
      color: #3DBEFF;
    }

    .subtitle {
      color: #6c757d;
    }

    .right-section {
      background-color: #24024e;
      color: white;
      position: relative;
    }

    .form-container {
      max-width: 400px;
      margin: auto;
    }

    .form-control::placeholder {
      color: #aaa;
    }

    button {
      width: 430px;
    }

    .footer-text {
      position: absolute;
      bottom: 20px;
      font-size: 0.75rem;
      color: #dee2e6;
    }

    a {
      color: #CDE3FF;
    }

    a:hover {
      color: #ffffff;
    }
  </style>
</head>
<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      <!-- Left Section -->
      <div class="col-md-6 d-flex flex-column align-items-center justify-content-fit text-center left-section">
        <div>
            <img src="{{ asset('images/inagata.svg') }}" alt="Image" class="me-2">
        </div>
      </div>

      <!-- Right Section -->
      <div class="col-md-6 d-flex flex-column justify-content-center right-section p-4">
        <div class="form-container">
          <h2 class="fw-bold mb-4">Daftar</h2>
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Nama</label>
              <input type="email" class="form-control" id="email" placeholder="example@gmail.com" style="width: 430px;">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" style="width: 430px;">
              </div>
            <div class="mb-3 position-relative" style="width: 430px;">
                <label for="password" class="form-label">Kata sandi</label>
                <input type="password" class="form-control pe-5" id="password" placeholder="@#*%">
                <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()" style="cursor: pointer;">
                </span>
              </div>
              <div class="mb-3 position-relative" style="width: 430px;">
                <label for="password" class="form-label">Konfirmasi kata sandi</label>
                <input type="password" class="form-control pe-5" id="password" placeholder="@#*%">
                <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()" style="cursor: pointer;">
                </span>
              </div>
              <input type="hidden" id="hashedPassword">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">ingatkan saya</label>
              </div>
            </div>
            <button type="submit" class="btn btn-light text-primary fw-bold w-100 rounded-3" style="width: 560px;">Daftar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
