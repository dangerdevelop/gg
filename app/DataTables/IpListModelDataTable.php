<?php

namespace App\DataTables;

use App\Models\IpListModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class IpListModelDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('action', function ($item) {
                $route = route('admin.actionByIp', ['id' => $item->id, 'action' => !$item->ban]);
                if ($item->ban) {
                    return '<a class="btn btn-sm btn-success" href="' . $route . '">Yasağı Kaldır</a>';
                } else {
                    return '<a class="btn btn-sm btn-danger" href="' . $route . '">Yasakla</a>';
                }
            })
            ->editColumn('ban', function ($item) {
                $badge = $item->ban ? 'bg-danger' : 'bg-primary';
                $badgeText = $item->ban ? 'Yasaklı' : 'Serbest';
                return '<span class="badge ' . $badge . '">' . $badgeText . '</span>';
            })
            ->editColumn('total_count_count', function ($item) {
                return $item->total_count_count;
            })
            ->editColumn('info', function ($item) {
                return $item->info;
            })->rawColumns(['ban', 'action', 'info'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(IpListModel $model): QueryBuilder
    {
        return $model->newQuery()->withCount(['totalCount']);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('iplistmodel-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons(
                Button::make('excel'),
                Button::make('reload')
            )->ajax([
                'url' => route('admin.listip'),
                "type" => 'GET',
            ]);;
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('ip'),
            Column::make('ban')->title('Durumu'),
            Column::make('info')->title('kaynak'),
            Column::make('total_count_count')->title('Toplam Girme Sayısı'),
            Column::make('action')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'IpListModel_' . date('YmdHis');
    }
}
