<?php

namespace App\Livewire;


use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsersTable extends DataTableComponent
{
    
    public string $tableName = 'users';
    public array $users = [];
 
    public $columnSearch = [
        'name' => null,
        'email' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setReorderEnabled()
            ->setSingleSortingDisabled()
            ->setHideReorderColumnUnlessReorderingEnabled()
            ->setFilterLayoutSlideDown()
            ->setRememberColumnSelectionDisabled()
            ->setSecondaryHeaderTrAttributes(function($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setSecondaryHeaderTdAttributes(function(Column $column, $rows) {
                if ($column->isField('id')) {
                    return ['class' => 'text-red-500'];
                }
 
                return ['default' => true];
            })
            ->setFooterTrAttributes(function($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setFooterTdAttributes(function(Column $column, $rows) {
                if ($column->isField('name')) {
                    return ['class' => 'text-green-500'];
                }
 
                return ['default' => true];
            })
            ->setUseHeaderAsFooterEnabled()
            ->setHideBulkActionsWhenEmptyEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
            ->sortable()
            ->setSortingPillTitle('Key')
            ->setSortingPillDirections('0-9', '9-0')
            ->secondaryHeader(function($rows) {
                return $rows->sum('id');
            })
            ->html(),
            Column::make('Name')
            ->sortable()
            ->searchable()
            ->asHtml()
            ->secondaryHeader(function() {
                return view('admin.auth.users.index', ['field' => 'name','columnSearch' => $this->columnSearch]);
            }),
        Column::make('E-mail', 'email')
            ->sortable()
            ->searchable()
            ->asHtml()
            ->secondaryHeader(function() {
                return view('admin.auth.users.index', ['field' => 'email','columnSearch' => $this->columnSearch]);
            }),
        ];
    }
    public function builder(): Builder
    {
        return User::query()
            ->when($this->columnSearch['name'] ?? null, fn ($query, $name) => $query->where('name', 'like', '%' . $name . '%'))
            ->when($this->columnSearch['email'] ?? null, fn ($query, $email) => $query->where('email', 'like', '%' . $email . '%'));
    }
    
    public function reorder($items): void
    {
        foreach ($items as $item) {
            User::find($item[$this->getPrimaryKey()])->update(['sort' => (int)$item[$this->getDefaultReorderColumn()]]);
        }
    }
}
