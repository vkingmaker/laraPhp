<?php


$task = $app['database']->selectAllPapers('paper');

require 'views/index.view.php';