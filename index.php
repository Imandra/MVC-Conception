<?php

require_once __DIR__.'/models/photo.php';

$items = photo_get_all();

include __DIR__.'/views/index.php';