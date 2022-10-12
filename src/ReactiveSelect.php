<?php

namespace Mazur301\NovaReactiveField;

use FifteenGroup\NovaReactiveField\Traits\ReactiveField;
use Laravel\Nova\Fields\Select;

class ReactiveSelect extends Select
{
    use ReactiveField;

    public $component = 'reactive-select-field';
}
