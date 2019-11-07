<?php

use App\Controllers\CategoryController;

require __DIR__."/core/bootstrap.php";

(new CategoryController)->index();
