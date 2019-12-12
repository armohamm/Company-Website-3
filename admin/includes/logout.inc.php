<?php

session_start(); // Aloittaa session
session_destroy(); // Lopettaa session 

header("Location: ../login.php"); // Palauttaa takaisin kirjautumis sivulle