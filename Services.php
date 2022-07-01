<?php

/* Serve API */
require './Modules/Core/Core.php';
echo json_encode(constant('API_RESULT_JSON'));