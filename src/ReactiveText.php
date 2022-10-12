<?php

namespace Mazur301\NovaReactiveField;

use Mazur301\NovaReactiveField\Traits\ReactiveField;
use Laravel\Nova\Fields\Text;

class ReactiveText extends Text
{
    use ReactiveField;

    public $component = 'reactive-text-field';
}
