<?php

namespace Mazur301\NovaReactiveField;

use Mazur301\NovaReactiveField\Traits\ReactiveField;
use Laravel\Nova\Fields\Select;

class ReactiveSelect extends Select
{
    use ReactiveField;

    public $component = 'reactive-select-field';
}
