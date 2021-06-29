<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produto;

class Produtos extends Component
{
    public $produtos, $name, $cost, $price, $produto_id, $qtd;
    public $updateMode = false;


    public function render()
    {
        $this->produtos = Produto::all();
        return view('livewire.produtos');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->cost = '';
        $this->price = '';
        $this->qtd = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'qtd' => 'required',
        ]);

        Produto::create($validatedDate);

        session()->flash('message', 'Produto cadastrado com sucesso!');

        $this->resetInputFields();
        $this->emit('produtoStore', 'store');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $produto = Produto::where('id',$id)->first();
        $this->produto_id = $id;
        $this->name = $produto->name;
        $this->cost = $produto->cost;
        $this->price = $produto->price;
        $this->qtd = $produto->qtd;

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();

    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'qtd' => 'required',
        ]);

        if ($this->produto_id) {
            $produto = Produto::find($this->produto_id);
            $produto->update([
                'name' => $this->name,
                'cost' => $this->cost,
                'price' => $this->price,
                'qtd' => $this->qtd,
            ]);

            $this->updateMode = false;
            session()->flash('message', 'Produto atualizado com sucesso!');
            $this->resetInputFields();
        }
    }

    public function destroy($id)
    {

        $produto = Produto::where('id',$id)->first();
        $this->produto_id = $id;
        $this->name = $produto->name;
        $this->cost = $produto->cost;
        $this->price = $produto->price;
        $this->qtd = $produto->qtd;

    }

    public function delete()
    {
        if($this->produto_id){
            $produto = Produto::find($this->produto_id)->delete();
            session()->flash('message', 'Produto deletado com sucesso!');
        }
    }
}
