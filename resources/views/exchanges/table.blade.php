
<div class="overflow-x-auto relative sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">Name</th>
                <th scope="col" class="py-3 px-6">ApiKey</th>
                <th scope="col" class="py-3 px-6">Date Created</th>
                <th scope="col" class="py-3 px-6"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr class="bg-white dark:bg-gray-800{{ $loop->last ? '' : ' border-b dark:border-gray-700'}}">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $record->id }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $record->name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $record->api_key }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $record->created_at->format('d-m-Y') }}
                    </td>
                    <td class="py-4 px-6 text-right">
                        <x-btn-link class="py-1 px-2 mr-2" href="/exchanges/edit/{{ $record->id }}" >Edit</x-btn-link>
                        <x-danger-button class="py-1 px-2"
                            wire:click="deleteId({{ $record->id }})"
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-exchange-deletion')"
                        >{{ __('Delete') }}</x-danger-button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<x-modal name="confirm-exchange-deletion" focusable>
    <div class="p-4">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Are you sure your want to delete the exchange?</h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This action can NOT be undone.') }}
        </p>
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-danger-button class="ml-3" wire:click.prevent="destroy()" x-on:click="$dispatch('close')">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>
    </div>
</x-modal>