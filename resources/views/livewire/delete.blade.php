<!-- Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja excluir o produto?</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter Name" readonly>
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Custo (R$)</label>
                        <input type="number" class="form-control" wire:model="cost" id="exampleFormControlInput2" placeholder="Custo (R$)" readonly>
                        @error('cost') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Preço (R$)</label>
                        <input type="number" class="form-control" wire:model="price" id="exampleFormControlInput3" placeholder="Preço (R$)" readonly>
                        @error('price') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Quantidade</label>
                        <input type="number" class="form-control" wire:model="qtd" id="exampleFormControlInput3" placeholder="Quantidade" readonly>
                        @error('qtd') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" wire:click.prevent="delete()" class="btn btn-danger" data-bs-dismiss="modal">Deletar</button>
            </div>
       </div>
    </div>
</div>
