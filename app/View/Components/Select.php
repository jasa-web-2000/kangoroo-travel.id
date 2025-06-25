<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;
use Illuminate\Database\Eloquent\Collection;

class Select extends Component
{
    /**
     * Create a new component instance.
     */

    public Collection $area;
    public function __construct(
        public string $title,
        public string $model,
        public bool $required = false,
        public int $whereId = 0,
        public ?string $name = NULL,
    ) {

        switch ($model) {
            case 'Province':
                $this->area = Province::orderBy('name', 'asc')->get();
                break;
            case 'City':
                $this->area = City::orderBy('name', 'asc')
                    ->where('province_code', $this->whereId)
                    ->get();
                break;
            case 'District':
                $this->area = District::orderBy('name', 'asc')
                    ->where('city_code', $this->whereId)
                    ->get();
                break;
            default:
                $this->area = new Collection();
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
