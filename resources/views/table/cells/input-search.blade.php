<div>
    <?php print_r($field); ?>
    <input 
        type="text" 
        wire:model="User" 
        placeholder="Search by {{ $field }}" 
        class="form-input w-full"
    />
</div>
