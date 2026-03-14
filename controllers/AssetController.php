<?php
require_once __DIR__ . '/../models/Asset.php';

class AssetController {
    public function index() {
        $assets = Asset::getAll();
        require __DIR__ . '/../views/assets/list.php';
    }
}