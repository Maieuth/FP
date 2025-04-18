<?php
function afficherImageAvecSwitch($imageNormale, $imageSwitch,$lien) {
  echo '
    <a href="' .$lien. '"class="image-switch">
      <img src="' . $imageNormale . '" alt="image normale" class="img-normal">
      <img src="' . $imageSwitch . '" alt="image survol" class="img-switch">
    </a>
  ';
}

?>

