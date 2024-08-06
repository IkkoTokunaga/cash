<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Amount') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form wire:submit="save">
                <input type="text" class="form-control w-25" style="min-width: 400px;" id="account_name"
                    wire:model="account_name">
                @error('account_name')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="hidden" id="account_id" wire:model="account_id">
                <button type="submit" class="btn btn-danger btn-lg mt-3"> &nbsp;&nbsp;保存&nbsp;&nbsp; </button>
            </form>
            <div class="row ">
                <div class="col">
                    <table class="table table-bordered mt-2">
                        <thead class="table-success">
                            <tr>
                                <th class="text-center">科目名</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr>
                                    <td>{{ $account->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <div wire:click="edit({{ $account->id }})" style="cursor: pointer;"><img
                                                    src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt=""></div>
                                            <div wire:click="delete({{ $account->id }})"
                                                wire:confirm="Are you sure you want to delete this one?"
                                                style="cursor: pointer;"><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt=""></div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-sm-2 col-md-4 col-lg-6">
                </div>
            </div>
        </div>
    </div>
</div>
