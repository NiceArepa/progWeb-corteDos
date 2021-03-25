<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marquez - Work Directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./assets/styles/main.css" />
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-dark bg-info">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1"> Work Directory</span>
                <span class="navbar-brand mb-0 h2">Developed By: Gabriel Marquez</span>
            </div>
        </nav>
        <aside>
            <h3 class="aside-title">Workspace</h3>
            <ul class="nav flex-column directory-container">
                <li class="nav-sub-item bg-light first-folder">
                    <a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'] . '?path=./directory' ?>">
                        <i class="bi-folder" style="
                  font-size: 1rem;
                  color: cornflowerblue;
                  margin-right: 0.5rem;
                "></i>/ Raiz
                    </a>
                    <ul class="sub-options">
                        <?php
                        include('./src/controllers/tree.controller.php')
                        ?>
                        <!-- <li
                class="nav-sub-item bg-light"
                data-bs-toggle="collapse"
                href="#collapseExample"
                role="button"
                aria-expanded="false"
                aria-controls="collapseExample"
              >
                <a class="nav-link">
                  <i
                    class="bi-folder"
                    style="
                      font-size: 1rem;
                      color: cornflowerblue;
                      margin-right: 0.5rem;
                    "
                  ></i>
                  - Documents
                </a>
                <ul class="sub-options">
                  <li
                    class="nav-sub-item bg-light"
                    data-bs-toggle="collapse"
                    href="#collapseExample"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                  >
                    <a class="nav-link">
                      <i
                        class="bi-file-earmark-text"
                        style="
                          font-size: 1rem;
                          color: cornflowerblue;
                          margin-right: 0.5rem;
                        "
                      ></i>
                      - notas.txt
                    </a>
                  </li>
                </ul>
              </li>
              <li
                class="nav-sub-item bg-light"
                data-bs-toggle="collapse"
                href="#collapseExample"
                role="button"
                aria-expanded="false"
                aria-controls="collapseExample"
              >
                <a class="nav-link">
                  <i
                    class="bi-folder"
                    style="
                      font-size: 1rem;
                      color: cornflowerblue;
                      margin-right: 0.5rem;
                    "
                  ></i
                  >/ Works
                </a>
                <ul class="sub-options">
                  <li
                    class="nav-sub-item bg-light"
                    data-bs-toggle="collapse"
                    href="#collapseExample"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                  >
                    <a class="flex-sm-fill nav-link active">
                      <i
                        class="bi-folder"
                        style="
                          font-size: 1rem;
                          color: cornflowerblue;
                          margin-right: 0.5rem;
                        "
                      ></i>
                      / Programacion Web
                    </a>
                    <ul class="sub-options">
                      <li
                        class="nav-sub-item bg-light"
                        data-bs-toggle="collapse"
                        href="#collapseExample"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapseExample"
                      >
                        <a class="nav-link active">
                          <i
                            class="bi-file-earmark-text"
                            style="
                              font-size: 1rem;
                              color: cornflowerblue;
                              margin-right: 0.5rem;
                            "
                          ></i>
                          - index.php
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li
                class="nav-sub-item bg-light"
                data-bs-toggle="collapse"
                href="#collapseExample"
                role="button"
                aria-expanded="false"
                aria-controls="collapseExample"
              >
                <a class="nav-link">
                  <i
                    class="bi-file-earmark-text"
                    style="
                      font-size: 1rem;
                      color: cornflowerblue;
                      margin-right: 0.5rem;
                    "
                  ></i>
                  Trojan.horse
                </a>
              </li>
-->
                    </ul>
                </li>
            </ul>
        </aside>
        <main>
            <?php
            include('./src/controllers/explorer.controller.php')
            ?>

            <!--  <form action="#" method="post">
                <textarea name="editor-input" id="editor-input" cols="30" rows="10"></textarea>
            </form> -->
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>