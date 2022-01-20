<?php
//Crea a mano un fichero que contenga la palabra "MPWAR" en su interior
$file = new SplFileObject("mpwar.txt", "w");
$written = $file->fwrite("MPWAR");
echo "Wrote $written bytes to file";

