<?php

namespace Mazur301\NovaReactiveField;

use Mazur301\NovaReactiveField\Traits\ReactiveField;
use Laravel\Nova\Fields\Number;

class ReactiveNumber extends Number
{
    use ReactiveField;

    public $component = 'reactive-number-field';
}
