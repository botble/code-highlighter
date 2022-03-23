<?php

namespace Botble\CodeHighlighter\Providers;

use Illuminate\Support\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Theme;

class CodeHighlighterServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->setNamespace('plugins/code-highlighter');
    }

    public function boot()
    {
        $this->publishAssets();

        add_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, function () {
            Theme::asset()
                ->add('highlight-css', 'vendor/core/plugins/code-highlighter/libraries/highlight/highlight.min.css');
            Theme::asset()->container('footer')
                ->add('highlight-js', 'vendor/core/plugins/code-highlighter/libraries/highlight/highlight.min.js');
            Theme::asset()->container('footer')
                ->add('code-highlighter-js', 'vendor/core/plugins/code-highlighter/js/code-highlighter.js');
        }, 125, 0);
    }
}
