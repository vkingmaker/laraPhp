<?php 
require 'database/Connection.php';

$config = require 'config.php';

require 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);