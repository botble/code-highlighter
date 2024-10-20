<?php

use Botble\Base\Facades\AdminHelper;
use Botble\CodeHighlighter\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function () {
    Route::group(['prefix' => 'settings', 'permission' => 'code-highlighter'], function () {
        Route::get('code-highlighter', [SettingController::class, 'edit'])->name('code-highlighter.settings');
        Route::put('code-highlighter', [SettingController::class, 'update'])->name('code-highlighter.settings.update');
    });
});
