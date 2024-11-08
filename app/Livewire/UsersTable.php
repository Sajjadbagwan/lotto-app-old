<?php

namespace App\Livewire;


use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Livewire\Component;

class UsersTable extends DataTableComponent
{
    
    protected $model = User::class;
 
    public $columnSearch ='';

    public string $tableName = 'users';

    public array $users = [];

    public function configure(): void
    {
        $this->setPrimaryKey('id')->setReorderEnabled()
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
            //->view('table.cells.actions')// Custom view for actions
            ->secondaryHeader(function() {
                return view('table.cells.input-search', ['field' => 'name', 'columnSearch' => $this->columnSearch]);
            })
            ->html(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable()
                ->secondaryHeader(function() {
                    return view('table.cells.input-search', ['field' => 'email', 'columnSearch' => $this->columnSearch]);
                }),
                
            
        ];
    }
        // Query the model for data
        public function query()
        {
            return User::query();
        }
    
        // Optional: Paginate results
        public function pagination(): int
        {
            return 10; // Adjust this as needed
        }
    
        // Custom row view (optional)
        public function rowView(): string
        {
            return 'livewire.admin.users-table-row'; // Custom row view
        }
        public function builder(): Builder
        {
            return User::query()
                ->when($this->columnSearch['name'] ?? null, fn ($query, $name) => $query->where('users.name', 'like', '%' . $name . '%'))
                ->when($this->columnSearch['email'] ?? null, fn ($query, $email) => $query->where('users.email', 'like', '%' . $email . '%'));
        }
        public function reorder($items): void
        {
            foreach ($items as $item) {
                User::find((int)$item['value'])->update(['sort' => (int)$item['order']]);
            }
        }
}
