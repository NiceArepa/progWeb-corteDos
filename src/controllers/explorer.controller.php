<?php
$file_image = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
</svg>';

$folder_image = '
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
<path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
</svg>
';

$path = $_GET['path'] ?? './directory';
$pathServer = __DIR__ . '\directory';


if ($path) {
    echo '
    <div class="header">

                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Crear Archivo
                    </a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        Crear Carpeta
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <form method="post" action="' . $_SERVER["PHP_SELF"] . '">
                        <div class="card card-body file-form">
                        
                        <input type="hidden" value="' . $path . '" id="path-input" name="path-input">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Archivo</label>
                            <input type="text" class="form-control" id="file-input" name="file-input" placeholder=". . . ">

                            <button type="submit" class="btn btn-success">Crear</button>
                        </div>
                    </form>
                </div>
                <div class="collapse" id="collapseExample2">
                    <form method="post" action="' . $_SERVER["PHP_SELF"] . '">
                        <div class="card card-body file-form">
                            <input type="hidden" value="' . $path . '" id="path-input" name="path-input">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de Carpeta</label>
                            <input type="text" class="form-control" id="folder-input" name="folder-input" placeholder=". . . ">

                            <button type="submit" class="btn btn-success">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
    <div class="content">
    <div class="explorer" data-path="' . $path . '">
    ';
    $ficheros = array_diff(scandir($path), array('..', '.'));;
    foreach ($ficheros as $itemId => $item) {
        echo '
        <div class="item">
                        <a class="nav-link" ' . (is_dir($path . '/' . $item) == "1" ? 'href="' . ($_SERVER['PHP_SELF'] . '?path=' . $path . '/' . $item) . '"' : '') . ' >
                            ' .
            (is_dir($path . '/' . $item) == '1' ? $folder_image : $file_image)
            . '
                            ' . $item . '
                        </a>
         </div>
        ';
    }
    echo '</div>
    
    </div>
    ';
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field

    $fileName = $_POST['file-input'] ?? false;
    $folderName = $_POST['folder-input'] ?? false;
    $pathURL = $_POST['path-input'] ?? false;


    if ($fileName) {
        //  fopen(getcwd().$pathURL.'/'.$fileName.'.txt','r');

        $newFileName = $pathURL . '/' . $fileName . ".txt";
        $newFileContent = 'something...';

        if (file_put_contents($newFileName, $newFileContent) !== false) {
        } else {
            echo "Cannot create file (" . basename($newFileName) . ")";
        }
        //print $pathURL.'/'.$fileName.'.txt';
    }
    if ($folderName) {
        mkdir($pathURL . '/' . $folderName, 0777, true);
    }
}
