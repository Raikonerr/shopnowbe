<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Gestion", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <title>Dashboard</title>
</head>
<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="./images/—Pngtree—shop now banner free vector_6213142.png" alt="logo">
          <h2>Shop<span class="now">Now</span></h2>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>

      </div>
        <div class="sidebar">
          <a href="#"  class="active">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </a>
          <a href="./products.php">
            <span class="material-icons-sharp">inventory</span>
            <h3>Products</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">logout</span>
            <h3>Log out</h3>
          </a>
        </div>
    </aside>

    <main>
      <h1>Dashboard</h1>

      <div class="date">
        <input type="date">
      </div>
      <div class="insights">
        <div class="sales">
          <span class="material-icons-sharp">
            analytics</span>
            <div class="middle">
              <div class="left">
                <h3>Total Sales</h3>
                <h1>$25,024</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                  <p>81%</p>
                </div>
              </div>
            </div>
          <small class="text-muted">Last 24 hours</small>
        </div>
<!-----------------------------end of sales------------------>
        <div class="expenses">
          <span class="material-icons-sharp">
            bar_chart</span>
            <div class="middle">
              <div class="left">
                <h3>Total Expenses</h3>
                <h1>$14,160</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                  <p>62%</p>
                </div>
              </div>
            </div>
          <small class="text-muted">Last 24 hours</small>
        </div>
<!-----------------------------end of expenses-------------->
        <div class="income">
          <span class="material-icons-sharp">
            stacked_line_chart</span>
            <div class="middle">
              <div class="left">
                <h3>Total Income</h3>
                <h1>$10,864</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                  <p>44%</p>
                </div>
              </div>
            </div>
          <small class="text-muted">Last 24 hours</small>
        </div>
<!-----------------------------end of income--------------->
      </div>

      <div class="recent-orders">
        <h2>Recent Orders</h2>
        <table>
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Product Number</th>
              <th>Payment</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lorem ipsum</td>
              <td>85631</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>

            <tr>
              <td>Lorem ipsum</td>
              <td>85631</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>

            <tr>
              <td>Lorem ipsum</td>
              <td>85631</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>

            <tr>
              <td>Lorem ipsum</td>
              <td>85631</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>

            <tr>
              <td>Lorem ipsum</td>
              <td>85631</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>

            <tr>
              <td>Lorem ipsum</td>
              <td>85631</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
          </tbody>
        </table>
        <a href="#">Show All</a>
      </div>
    </main>

    <div class="right">
      <div class="top">
        <button class="menu" id="menu-btn">
          <span class="material-icons-sharp">menu
          </span>
        </button>
        <div class="theme-toggler">
          <span class="material-icons-sharp active">
            light_mode
          </span>
          <span class="material-icons-sharp">
            dark_mode
          </span>
        </div>
        <div class="profile">
          <div class="info">
            <p>Hey, <b>Lorem</b></p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="./images/blank-profile-picture-973460_1280.webp">
          </div>
        </div>
      </div>
      <!--------------End of top-------->
      <div class="recent-updates">
        <h2>Recent Updates</h2>
        <div class="updates">
          <div class="update">
            <div class="profile-photo">
              <img src="./images/blank-profile-picture-973460_1280.webp">
            </div>
            <div class="message">
              <p><b>Lorem ipsum</b> received his order of Lorem ipsum.</p>
              <small class="text-muted">2 Hours Ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="./images/blank-profile-picture-973460_1280.webp">
            </div>
            <div class="message">
              <p><b>Lorem ipsum</b> received his order of Lorem ipsum.</p>
              <small class="text-muted">2 Hours Ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="./images/blank-profile-picture-973460_1280.webp">
            </div>
            <div class="message">
              <p><b>Lorem ipsum</b> received his order of Lorem ipsum.</p>
              <small class="text-muted">2 Hours Ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./index.js"></script>
</body>
</html>
