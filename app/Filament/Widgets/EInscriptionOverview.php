<?php

namespace App\Filament\Widgets;

use App\Models\Inscription;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EInscriptionOverview extends BaseWidget
{
    public function getColumns(): int
    {
        return 1;
    }
    protected function getStats(): array
    {
        return [
            Stat::make('Inscriptions', Inscription::count())
                ->icon('heroicon-o-users')
                ->color('success')
                ->description('Total')
                ->descriptionColor('success'),
        ];
    }
}
