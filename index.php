<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Q&A Forum - Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9fafb;
      font-family: Arial, sans-serif;
    }
    .sidebar {
      background: #fff;
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .question-card {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 15px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .question-card h5 {
      margin-bottom: 10px;
    }
    .tag {
      background: #e7f3ff;
      color: #0366d6;
      border-radius: 5px;
      font-size: 13px;
      padding: 3px 8px;
      margin-right: 5px;
    }
    .hot-box {
      background: #fff;
      border-radius: 8px;
      padding: 15px;
      margin-top: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .navbar {
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
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

</body>
</html>
