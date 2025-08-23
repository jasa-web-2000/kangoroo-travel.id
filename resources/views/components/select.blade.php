<div class="">
    <select {{ $required ? 'required' : '' }} {{ $area->count() < 1 ? 'disabled' : '' }}
        class="w-full border cursor-pointer text-sm border-slate-300 p-2 rounded focus:border-yellow-700 focus:outline-yellow-700 {{ $area->count() < 1 ? 'bg-gray-200/70 !cursor-not-allowed' : '' }}"
        wire:model.live="selected{{ $model }}" name="{{ Str::slug($name) . '_' . Str::slug($title) }}">
        <option value="">Pilih {{ $title }}</option>

        @forelse ($area as $item)
            <option value={{ $item['id'] }}>{{ Str::title($item['name']) }}</option>
        @empty
            <option value="" disabled>Tidak Ada Data</option>
        @endforelse
    </select>
</div>
