<?php

$query = require 'bootstrap.php';

require 'papers.php';

$task = $query->selectAllPapers('paper');

require 'index.view.php';