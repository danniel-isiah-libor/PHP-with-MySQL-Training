<?php

require_once "./ProcessGetProfile.php";

use api\ProcessGetProfile;

return (new ProcessGetProfile())->getProfile();

die(json_encode($response));