<div>
    @foreach($row->roles as $role)
        <span class="text-sm text-gray-600">{{ ucfirst($role->name) }}</span>
    @endforeach
</div>
