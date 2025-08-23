<?php

namespace App\View\Components;

use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ProvinceController;
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

    public $area = null;

    public function __construct(
        public string $title,
        public string $model,
        public bool $required = false,
        public int $whereId = 0,
        public ?string $name = NULL,
    ) {

        switch ($model) {
            case 'Province':
                $this->area = ProvinceController::all()
                    ->sortBy('name');

                break;
            case 'City':
                $this->area = CityController::all()
                    ->sortBy('name')
                    ->where('province_id', $this->whereId);

                break;
            case 'District':
                $this->area = DistrictController::all()
                    ->sortBy('name')
                    ->where('regency_id', $this->whereId);

                break;
            default:
                $this->area = null;
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
