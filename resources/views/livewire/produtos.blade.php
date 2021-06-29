<div>
    @include('livewire.create')
    @include('livewire.update')
    @include('livewire.delete')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:20px;">
          {{ session('message') }}
        </div>
    @endif
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Custo (R$)</th>
                <th>Preço (R$)</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ number_format($value->cost, 2, ',', '.') }}</td>
                <td>{{ number_format($value->price, 2, ',', '.') }}</td>
                <td>{{ $value->qtd }}</td>
                <td>
                <button data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Editar</button>
                <button data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="destroy({{ $value->id }})" class="btn btn-danger btn-sm">Deletar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

