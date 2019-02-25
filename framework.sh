#!/bin/bash
cd /c/xampp/htdocs/

echo "Ingresa el nombre del proyecto"

read carpeta

$carpeta

git clone https://github.com/david-abad/framework.git


mv /c/xampp/htdocs/framework /c/xampp/htdocs/$carpeta