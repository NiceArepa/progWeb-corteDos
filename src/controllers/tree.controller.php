<?php
opendir('./directory');
$directory = './directory';

createTree($directory);

function createTree($path)
{
    $ficheros = array_diff(scandir($path), array('..', '.'));;
    foreach ($ficheros as $itemId => $item) {
        /*print $item . is_dir($directory."/".$item) . "<br>";*/
        echo '
        <li
                class="nav-sub-item bg-light"
                
              >
                <a class="nav-link" '.(is_dir($path . '/' . $item)=="1" ?'href="'.($_SERVER['PHP_SELF'].'?path='.$path . '/' . $item).'"':'').'>
                  <i
                    ' .
            (is_dir($path . '/' . $item) == '1' ? 'class="bi-folder"' : 'class="bi-file-earmark-text"')
            . '
                    style="
                      font-size: 1rem;
                      color: cornflowerblue;
                      margin-right: 0.5rem;
                    "
                  ></i>
                  ' . $item . '
                </a>
                <ul class="sub-options">
                ';
        if (is_dir($path. '/' . $item) == '1') {
            createTree($path . '/' . $item);
        }
        echo '
            </ul>
                </li>
        ';
    }
}
