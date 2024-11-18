<!DOCTYPE html>
<html lang="ru" style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="About Yoga Studio, Amazing, curious, healthy and happy teachers">
    <meta name="description" content="">
    <title>Page 16</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="index.css" media="screen">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav a {
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .service-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service {
            border-bottom: 1px solid #eaeaea;
            padding: 10px 15px; /* Уменьшено расстояние между услугами */
            transition: box-shadow 0.3s ease;
            cursor: pointer; /* Указатель курсора при наведении */
        }

        .service:last-child {
            border-bottom: none;
        }

        .service:hover {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Эффект тени при наведении */
            background-color: #f0f0f0; /* Подсветка при наведении */
        }

        .total-services {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 1.2em;
        }

        footer {
            padding: 20px;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            color: #666;
        }
    </style>
    <script src="jquery-1.9.1.min.js" defer></script>
    <script src="nicepage.js" defer></script>
</head>
<body>

<header class="u-clearfix u-header u-header" id="sec-10b7"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse u-custom-font u-font-montserrat" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;" wfd-invisible="true">
            <a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container" wfd-invisible="true">
            <ul class="u-custom-font u-font-montserrat u-nav u-spacing-20 u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-grey-90 u-text-hover-palette-2-base" href="index.php" style="padding: 10px;">Главная</a>
              </li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse" wfd-invisible="true">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <!--меню-->
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Services.php">Записаться</a></li>
                  <!--Конец меню-->
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70" wfd-invisible="true"></div>
          </div>
        </nav>
      </div></header>

<div class="service-container">
    <?php
    include 'Settings.php';
    $conn = new mysqli($host, $login, $password, $db);
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Service";
    if ($result = $conn->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        echo "<p class='total-services'>Всего услуг: $rowsCount</p>";
        foreach ($result as $row) {
            // Переход на страницу услуги с использованием ссылки
            echo "<div class='service' onclick=\"window.location.href='ServiceDetail.php?id=" . htmlspecialchars($row['Id']) . "'\">";
            echo "<h3>" . htmlspecialchars($row["Name"]) . "</h3>";
            echo "<p>" . htmlspecialchars($row["Description"]) . "</p>";
            echo "</div>";
        }
        $result->free();
    } else {
        echo "Ошибка: " . $conn->error;
    }

    $conn->close();
    ?>
</div>

<footer class="u-align-center u-clearfix u-container-align-center u-footer u-grey-80 u-footer">
    <p>Made By Arnox</p>
</footer>

</body>
</html>