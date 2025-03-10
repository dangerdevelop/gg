<?php

namespace App\DataTables;

use App\Classes\SiteStatusEnum;
use App\Classes\SystemStatusEnum;
use App\Models\Sites;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SitesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('status', function ($table) {
                return SiteStatusEnum::tryFrom($table->status)->label();
            })
            ->addColumn('action', function ($column) {
                $html = '
                <a href=' . route('sites.edit', ['site' => $column->id]) . ' class="btn btn-info">Düzenle</a>';
                if (auth()->user()->hasPermissionTo('super')) {
                    $html .= '<a href="javascript:;" class="btn btn-danger usomcheck" data-domain="' . $column->site . '">USOM Kontrol</a>';
                }

                return $html;
            })
            ->editColumn('system', function ($table) {
                return SystemStatusEnum::tryFrom($table->system)->label();
            })

            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Sites $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters([
                'dom' => 'Blfrtip',
                'order' => [[0, 'desc']],
                "lengthMenu" => [10, 25, 50, 500],
                "pageLength" => "10",
                'buttons' => [
                    'excel',
                    'reload',
                ],
            ])->ajax([
                'url' => '/hacininyeri/sites',
                "type" => 'GET',
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('site'),
            Column::make('status'),
            Column::make('system'),
            Column::make('action')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Sites_' . date('YmdHis');
    }
}
