<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
	+ Cadastrar Produto
</button>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Produto</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Custo (R$)</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2" wire:model="cost" placeholder="Custo (R$)">
                        @error('cost') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Preço (R$)</label>
                        <input type="number" class="form-control" id="exampleFormControlInput3" wire:model="price" placeholder="Preço (R$)">
                        @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Quantidade</label>
                        <input type="number" class="form-control" id="exampleFormControlInput4" wire:model="qtd" placeholder="Quantidade">
                        @error('qtd') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
