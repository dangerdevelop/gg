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
                return '
                <a href=' . route('sites.edit', ['site' => $column->id]) . ' class="btn btn-info">Düzenle</a>
                <a href="javascript:;" class="btn btn-danger usomcheck" data-domain="' . $column->site . '">USOM Kontrol</a>
                ';
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
            ->setTableId('sites-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([]);
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
