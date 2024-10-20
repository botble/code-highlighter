<?php

namespace Botble\CodeHighlighter\Http\Requests;

use Botble\CodeHighlighter\CodeHighlighter;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class CodeHighlighterSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'code_highlighter_theme' => [
                'required',
                'string',
                Rule::in(array_keys(CodeHighlighter::getSupportedThemes())),
            ],
            'code_highlighter_languages' => [
                'required',
                'array',
                Rule::in(array_keys(CodeHighlighter::getSupportedLanguages())),
            ],
        ];
    }
}
