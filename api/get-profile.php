<?php

require_once "./ProcessGetProfile.php";

use api\ProcessGetProfile;

$response = (new ProcessGetProfile())->getProfile();

die(json_encode($response));
