<?php

namespace Mazur301\NovaReactiveField;

use Mazur301\NovaReactiveField\Traits\ReactiveField;
use Laravel\Nova\Fields\Boolean;

class ReactiveBoolean extends Boolean
{
    use ReactiveField;

    public $component = 'reactive-boolean-field';
}
