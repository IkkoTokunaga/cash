<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Support') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row ">
                <div class="col">
                    <form wire:submit="save">
                        <table class="table table-bordered mt-2 ">
                            <tr>
                                <th class="table-success"><label for="name">お名前</label></th>
                                <td>
                                    <input type="text" id="name" class="w-100" wire:model="name">
                                    <div>
                                        @error('name')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success"><label for="email">メールアドレス</label></th>
                                <td>
                                    <input type="email" id="email" class="w-100" wire:model="email">
                                    <div>
                                        @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success"><label for="payment">内容</label></th>
                                <td>
                                    <div>
                                        <textarea name="content" class="w-100" rows="6" wire:model="content"></textarea>
                                        @error('content')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-danger btn-lg mt-3">問い合わせる</button>
                    </form>
                </div>
                <div class="col-12 col-sm-2 col-md-4 col-lg-6">
                </div>
            </div>
        </div>
    </div>
</div>
