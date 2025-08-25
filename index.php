<php include 'backend/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Q&A Forum - Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #e0e7ff 0%, #f9fafb 60%, #c7d2fe 100%);
      font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
      transition: background 0.3s;
    }
    .sidebar, .hot-box {
      background: rgba(255,255,255,0.7);
      border-radius: 18px;
      padding: 22px 20px;
      box-shadow: 0 8px 32px 0 rgba(31,38,135,0.18);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.25);
      transition: box-shadow 0.3s, border 0.3s;
    }
    .sidebar:hover, .hot-box:hover {
      box-shadow: 0 16px 48px 0 rgba(31,38,135,0.22);
      border: 1.5px solid #a5b4fc;
    }
    .question-card {
      background: rgba(255,255,255,0.85);
      border-radius: 18px;
      padding: 28px 26px;
      margin-bottom: 22px;
      box-shadow: 0 4px 24px rgba(80,80,180,0.10), 0 1.5px 8px rgba(80,80,180,0.08);
      transition: transform 0.2s, box-shadow 0.2s, background 0.3s;
      opacity: 0;
      transform: translateY(40px);
    }
    .question-card.visible {
      opacity: 1;
      transform: translateY(0);
      transition: opacity 0.6s, transform 0.6s;
    }
    .question-card:hover {
      box-shadow: 0 12px 40px rgba(80,80,180,0.18), 0 2px 12px rgba(80,80,180,0.13);
      transform: scale(1.025);
      background: rgba(245,245,255,0.97);
    }
    .question-card h5 {
      margin-bottom: 10px;
      color: #4f46e5;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-shadow: 0 2px 8px #c7d2fe44;
      transition: color 0.2s, text-shadow 0.2s;
    }
    .question-card h5:hover {
      color: #0ea5e9;
      cursor: pointer;
      text-shadow: 0 4px 16px #38bdf844;
    }
    .tag {
      background: linear-gradient(90deg, #a5b4fc 60%, #f0abfc 100%);
      color: #312e81;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      padding: 4px 12px;
      margin-right: 7px;
      margin-bottom: 3px;
      box-shadow: 0 1px 4px #a5b4fc33;
      transition: background 0.2s, color 0.2s, box-shadow 0.2s;
      display: inline-block;
    }
    .tag:hover {
      background: linear-gradient(90deg, #6366f1 60%, #a21caf 100%);
      color: #fff;
      box-shadow: 0 2px 8px #6366f155;
      cursor: pointer;
    }
    .hot-box h6 {
      font-weight: 700;
      color: #f59e42;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }
    .navbar {
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      transition: box-shadow 0.3s;
      background: rgba(255,255,255,0.85) !important;
      backdrop-filter: blur(6px);
    }
    .navbar:hover {
      box-shadow: 0 4px 16px rgba(0,0,0,0.13);
    }
    .navbar-brand {
      font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
      font-weight: 700;
      font-size: 1.7rem;
      letter-spacing: 1px;
      color: #6366f1 !important;
      text-shadow: 0 2px 8px #a5b4fc44;
    }
    .pagination .page-link {
      border-radius: 8px;
      margin: 0 3px;
      font-weight: 500;
      transition: background 0.2s, color 0.2s, box-shadow 0.2s;
      box-shadow: 0 1px 4px #a5b4fc22;
    }
    .pagination .page-link:hover {
      background: #6366f1;
      color: #fff;
      box-shadow: 0 2px 8px #6366f155;
    }
    .btn-primary {
      background: linear-gradient(90deg, #6366f1 60%, #0ea5e9 100%);
      border: none;
      font-weight: 700;
      letter-spacing: 0.5px;
      box-shadow: 0 2px 8px #6366f144;
      transition: background 0.2s, box-shadow 0.2s;
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #0ea5e9 60%, #6366f1 100%);
      box-shadow: 0 4px 16px #0ea5e944;
    }
    .badge.bg-warning {
      background: linear-gradient(90deg, #fbbf24 60%, #f59e42 100%) !important;
      color: #fff !important;
      font-weight: 600;
      font-size: 1rem;
      box-shadow: 0 1px 4px #fbbf2433;
      border-radius: 8px;
      padding: 6px 16px;
    }
    .sidebar ul li a, .hot-box ul li {
      font-size: 1.08rem;
      font-weight: 500;
      color: #6366f1;
      text-decoration: none;
      transition: color 0.2s;
    }
    .sidebar ul li a:hover {
      color: #0ea5e9;
      text-decoration: underline;
    }
    .hot-box ul li {
      color: #f59e42;
      margin-bottom: 6px;
    }
    .hot-box ul li:last-child {
      margin-bottom: 0;
    }
    .sidebar h6 {
      font-weight: 700;
      color: #6366f1;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }
    .text-muted {
      color: #64748b !important;
      font-size: 0.98rem;
    }
  </style>
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">DevForum</a>
    <form class="d-flex mx-auto w-50">
      <input class="form-control me-2" type="search" placeholder="Search questions...">
    </form>
    <div>
      <a href="ask.php" class="btn btn-primary">Ask Question</a>
      <span class="ms-3">John Doe (1250 rep)</span>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
      <div class="sidebar">
        <h6>Categories</h6>
        <ul class="list-unstyled">
          <li><a href="#">All Questions (1234)</a></li>
          <li><a href="#">JavaScript (456)</a></li>
          <li><a href="#">React (234)</a></li>
          <li><a href="#">Python (345)</a></li>
          <li><a href="#">Node.js (123)</a></li>
          <li><a href="#">CSS (199)</a></li>
          <li><a href="#">HTML (167)</a></li>
          <li><a href="#">Database (98)</a></li>
        </ul>
      </div>

      <div class="hot-box">
        <h6>🔥 Hot This Week</h6>
        <ul class="list-unstyled">
          <li>How to implement authentication in React with JWT?</li>
          <li>Python list comprehension vs for loop performance</li>
          <li>CSS Grid vs Flexbox: When to use which?</li>
        </ul>
      </div>
    </div>

    <!-- Questions List -->
    <div class="col-md-9">
      <h5 class="mb-3">All Questions</h5>

      <!-- Question Card -->
      <div class="question-card">
        <div class="d-flex justify-content-between">
          <div>
            <span class="me-3">▲ 15</span>
            <span class="me-3">3 answers</span>
            <span>234 views</span>
          </div>
          <span class="badge bg-warning text-dark">Featured</span>
        </div>
        <h5 class="mt-2">How to implement authentication in React with JWT tokens?</h5>
        <p>I'm building a React application and need to implement user authentication using JWT tokens...</p>
        <div>
          <span class="tag">react</span>
          <span class="tag">authentication</span>
          <span class="tag">jwt</span>
        </div>
        <small class="text-muted">Alice Johnson • 20/1/2024</small>
      </div>

      <!-- Question Card -->
      <div class="question-card">
        <div>
          <span class="me-3">▲ 8</span>
          <span class="me-3">2 answers</span>
          <span>156 views</span>
        </div>
        <h5 class="mt-2">Python list comprehension vs for loop performance</h5>
        <p>I've heard that list comprehensions are faster than regular for loops in Python...</p>
        <div>
          <span class="tag">python</span>
          <span class="tag">performance</span>
        </div>
        <small class="text-muted">Bob Smith • 19/1/2024</small>
      </div>

      <!-- Pagination -->
      <nav>
        <ul class="pagination">
          <li class="page-item disabled"><a class="page-link">Previous</a></li>
          <li class="page-item active"><a class="page-link">1</a></li>
          <li class="page-item"><a class="page-link">2</a></li>
          <li class="page-item"><a class="page-link">3</a></li>
          <li class="page-item"><a class="page-link">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

  <!-- Bootstrap JS & Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Hiệu ứng động khi cuộn trang -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.question-card');
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      cards.forEach(card => observer.observe(card));
    });
  </script>
</body>
</html>
