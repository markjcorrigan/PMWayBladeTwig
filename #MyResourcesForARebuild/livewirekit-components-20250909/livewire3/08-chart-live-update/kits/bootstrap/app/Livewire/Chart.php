<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class Chart extends Component
{
    public array $chartDatasets = [[]];
    public array $chartLabels = [];

    public function updateChartData(): void
    {
        $this->dispatch('updateChartData',
            data: $this->getData(),
        )->self();
    }

    public function render(): View
    {
        return view('livewire.chart');
    }

    protected function getData(): array
    {
        $value = Http::get('https://api.coindesk.com/v1/bpi/currentprice.json')['bpi']['USD']['rate_float'] ?? null;

        if ($value) {
            $time = now()->format('H:i:s');

            $this->chartLabels[] = $time;
            $this->chartDatasets[0][] = $value;

            if (count($this->chartLabels) > 20) {
                unset($this->chartDatasets[0][0], $this->chartLabels[0]);
                $this->chartLabels = array_values($this->chartLabels);
                $this->chartDatasets[0] = array_values($this->chartDatasets[0]);
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Bitcoin Price Index (USD)',
                    'data' => $this->chartDatasets[0],
                ]
            ],
            'labels' => $this->chartLabels,
        ];
    }
}
