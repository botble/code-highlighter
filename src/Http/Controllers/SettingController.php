<?php

namespace Botble\CodeHighlighter\Http\Controllers;

use Botble\CodeHighlighter\Forms\CodeHighlighterSettingForm;
use Botble\Setting\Http\Controllers\SettingController as Controller;
use Botble\CodeHighlighter\Http\Requests\CodeHighlighterSettingRequest;

class SettingController extends Controller
{
    public function edit()
    {
        $this->pageTitle(trans('plugins/code-highlighter::code-highlighter.settings.title'));

        return CodeHighlighterSettingForm::create()->renderForm();
    }

    public function update(CodeHighlighterSettingRequest $request)
    {
        return $this->performUpdate($request->validated());
    }
}
