<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="produto_id">
                        <label for="exampleFormControlInput1">Produto</label>
                        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Custo (R$)</label>
                        <input type="number" class="form-control" wire:model="cost" id="exampleFormControlInput2" placeholder="Custo (R$)">
                        @error('cost') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Preço (R$)</label>
                        <input type="number" class="form-control" wire:model="price" id="exampleFormControlInput3" placeholder="Preço (R$)">
                        @error('price') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Quantidade</label>
                        <input type="number" class="form-control" wire:model="qtd" id="exampleFormControlInput3" placeholder="Quantidade">
                        @error('qtd') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-bs-dismiss="modal">Salvar</button>
            </div>
       </div>
    </div>
</div>
