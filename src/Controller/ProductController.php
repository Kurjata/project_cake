<?php
declare(strict_types=1);

namespace App\Controller;

class ProductController extends AppController
{
    public function show($id)
    {
        var_dump('product show'. $id);
        die();
    }
}
