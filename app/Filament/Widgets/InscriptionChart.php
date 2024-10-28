<?php

namespace App\Filament\Widgets;

use App\Models\Inscription;
use Filament\Widgets\ChartWidget;

class InscriptionChart extends ChartWidget
{
    protected static ?string $heading = 'Inscriptions Chart';

    protected function getData(): array
    {
        $monthlyCounts = Inscription::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $data = array_fill(1, 12, 0);
        foreach ($monthlyCounts as $month => $count) {
            $data[$month] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Inscriptions Chart',
                    'data' => array_values($data),
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
