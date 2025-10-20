<x-header />

<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    scroll-behavior: smooth;
  }

  a { text-decoration: none; }

  /* Hero Section */
  .hero {
    text-align: center;
    padding: 100px 20px;
    background: linear-gradient(135deg, #007bff, #28a745);
    color: white;
    position: relative;
    overflow: hidden;
  }
  .hero h1 {
    font-size: 52px;
    margin-bottom: 20px;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
  }
  .hero p {
    font-size: 22px;
    margin-bottom: 35px;
  }
  .hero a {
    display: inline-block;
    padding: 14px 35px;
    background-color: #ffc107;
    color: #333;
    font-weight: bold;
    border-radius: 8px;
    transition: all 0.4s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  }
  .hero a:hover {
    background-color: #e0a800;
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.3);
  }

  /* Features Section */
  .features {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    padding: 60px 20px;
    background-color: #fff;
  }
  .feature-card {
    background: linear-gradient(135deg, #eef2ff, #fff);
    border-radius: 15px;
    padding: 30px 20px;
    width: 280px;
    text-align: center;
    transition: transform 0.4s, box-shadow 0.4s, background 0.4s;
    border: none;
  }
  .feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    background: linear-gradient(135deg, #007bff, #28a745);
    color: white;
  }
  .feature-card h3 {
    margin-bottom: 15px;
    font-size: 20px;
  }
  .feature-card p { font-size: 15px; }

  /* Why Choose Section */
  .why-choose {
    text-align: center;
    padding: 60px 20px;
    background-color: #e9ecef;
  }
  .why-choose h2 {
    margin-bottom: 20px;
    color: #007bff;
    font-size: 32px;
  }
  .why-choose p {
    max-width: 600px;
    margin: 0 auto;
    font-size: 18px;
  }

  /* One Stop Solution Section */
  .solution {
    background-color: #f8fafc;
    padding: 60px 20px;
    text-align: center;
  }
  .solution h2 {
    font-size: 36px;
    margin-bottom: 10px;
    color: #111827;
  }
  .solution p {
    font-size: 18px;
    margin-bottom: 50px;
    color: #1e3a8a;
  }
  .solution-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 50px;
  }
  .solution-card {
    background-color: white;
    border-radius: 15px;
    padding: 25px;
    width: 240px;
    text-align: left;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .solution-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
  }
  .solution-card-icon {
    font-size: 26px;
    flex-shrink: 0;
  }
  .solution-card h3 { margin: 0 0 5px 0; font-size: 18px; }
  .solution-card p { margin: 0; font-size: 14px; color: #374151; }

  .solution-list {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
    text-align: left;
  }
  .solution-list-item {
    background-color: #e0efff;
    padding: 10px 15px;
    border-radius: 6px;
    flex: 1 1 200px;
    font-size: 14px;
  }

  .solution-img {
    margin-top: 50px;
    max-width: 500px;
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  }

  /* Features with Circle */
  .features-section {
    font-family: Arial, sans-serif;
    padding: 60px 20px;
    text-align: center;
    background: #f9f9f9;
  }
  .features-section h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  .features-section .subtitle {
    font-size: 16px;
    margin-bottom: 50px;
    color: #555;
  }
  .features-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
    flex-wrap: wrap;
  }
  .features-left, .features-right {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  .feature {
    background: #eef2ff;
    padding: 15px 20px;
    border-radius: 10px;
    font-weight: 500;
    text-align: left;
    max-width: 250px;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .feature:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
  }
  .features-center {
    position: relative;
  }
  .circle {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: #fff;
    border: 5px solid #007bff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    animation: pulse 2.5s infinite;
  }
  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }
  .circle .logo {
    font-size: 48px;
    color: #007bff;
  }
  .circle .edunix-text {
    display: flex;
    gap: 5px;
    font-size: 16px;
    margin-top: 5px;
  }
  .circle .edunix-text span:first-child { color: #007bff; }
  .circle .edunix-text span:last-child { color: #28a745; }

  .cta-section {
    margin-top: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
  }
  .cta-section p {
    font-weight: bold;
    font-size: 18px;
    margin: 0;
  }
  .play-btn {
    background: linear-gradient(45deg, #28a745, #34d399);
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 22px;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .play-btn:hover {
    transform: scale(1.2);
    box-shadow: 0 6px 15px rgba(0,0,0,0.25);
  }

  @media (max-width: 900px) {
    .features-wrapper {
      flex-direction: column;
      gap: 30px;
    }
    .features-left, .features-right {
      align-items: center;
    }
    .feature {
      max-width: 100%;
      text-align: center;
    }
  }
</style>

<!-- Hero Section -->
<section class="hero">
    <h1>Welcome to Edunix ERP</h1>
    <p>Manage your institution efficiently with our all-in-one ERP solution.</p>
    <a href="/dashboard">Go to Dashboard</a>
</section>

<!-- Features Section -->
<section class="features">
    <div class="feature-card">
        <h3>Student Management</h3>
        <p>Track student records, attendance, and academic progress seamlessly.</p>
    </div>
    <div class="feature-card">
        <h3>Staff Management</h3>
        <p>Handle staff details, payroll, and performance efficiently.</p>
    </div>
    <div class="feature-card">
        <h3>Finance & Accounts</h3>
        <p>Manage fees, payments, and financial reports easily and accurately.</p>
    </div>
</section>

<!-- Why Choose Section -->
<section class="why-choose">
    <h2>Why Choose Edunix ERP?</h2>
    <p>Edunix ERP simplifies institution operations, boosts productivity, and provides real-time insights to make informed decisions.</p>
</section>

<!-- One Stop Solution Section -->
<section class="solution">
    <h2>One Stop Solution For All Your Needs</h2>
    <p>Save Time. Save Money.</p>

    <div class="solution-cards">
        <div class="solution-card">
            <div class="solution-card-icon" style="color:#10b981;">&#9881;</div>
            <div>
                <h3>HR / Admin</h3>
                <p>Effortless, systematic and secure handling of school-related tasks</p>
            </div>
        </div>
        <div class="solution-card">
            <div class="solution-card-icon" style="color:#3b82f6;">&#128218;</div>
            <div>
                <h3>Teachers</h3>
                <p>Hassle-free handling of class tasks, assignments, exams, results & schedules</p>
            </div>
        </div>
        <div class="solution-card">
            <div class="solution-card-icon" style="color:#fbbf24;">&#128101;</div>
            <div>
                <h3>Parents</h3>
                <p>Systematic tracking of your child’s school-related tasks, exams, schedules</p>
            </div>
        </div>
        <div class="solution-card">
            <div class="solution-card-icon" style="color:#34d399;">&#127891;</div>
            <div>
                <h3>Students</h3>
                <p>Access all information related to classes, assignments, syllabus, exams</p>
            </div>
        </div>
    </div>

    <div class="solution-list">
        <div class="solution-list-item">Secure Access with Unique Login Id / Password</div>
        <div class="solution-list-item">Student Data Management</div>
        <div class="solution-list-item">Staff Management</div>
        <div class="solution-list-item">Fees Management</div>
        <div class="solution-list-item">Attendance Management</div>
        <div class="solution-list-item">Set Classes, Section, Syllabus & Time Table</div>
        <div class="solution-list-item">Manage Holidays, Notices and Events</div>
        <div class="solution-list-item">Manage Classes</div>
        <div class="solution-list-item">Manage Exams & Results</div>
        <div class="solution-list-item">Certificate and ID cards</div>
        <div class="solution-list-item">Job Applications</div>
        <div class="solution-list-item">Complaints & Feedbacks</div>
        <div class="solution-list-item">School Expenses</div>
        <div class="solution-list-item">Hostel Management</div>
        <div class="solution-list-item">Library Management</div>
        <div class="solution-list-item">Manage PTM</div>
    </div>

    <img src="/path-to-your-image.png" alt="Edunix Illustration" class="solution-img">
</section>

<!-- Features with Circle Section -->
<section class="features-section">
  <div class="container">
    <h2>How Edunix Will Help Your School To Manage Smoothly</h2>
    <p class="subtitle">To be Future-Ready and Ahead of Competition</p>

    <div class="features-wrapper">
      <div class="features-left">
        <div class="feature">Pre-Admission Enquiries And Admission Management</div>
        <div class="feature">Manage Academics Including Syllabus, Time Table Etc.</div>
        <div class="feature">Students & Employee Data Management</div>
        <div class="feature">Parent-Teacher Communication</div>
      </div>

      <div class="features-center">
        <div class="circle">
          <span class="logo">E</span>
          <div class="edunix-text">
            <span>EDU</span>
            <span>UNIX</span>
          </div>
        </div>
      </div>

      <div class="features-right">
        <div class="feature">Fee & Payroll Management</div>
        <div class="feature">Examinations & Assessments Online & Offline</div>
        <div class="feature">Library, Inventory & Transport Management</div>
        <div class="feature">Results Generation & Report Cards</div>
      </div>
    </div>

    <div class="cta-section">
      <p>Simplify Processes And Transform Your School In Minutes..</p>
      <button class="play-btn">&#9658;</button>
    </div>
  </div>
</section>

<x-footer />
