<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/cardapio', function () {
    return view('cardapio');
})->name('produtos');

Route::post('/adicionar-carrinho', function (Illuminate\Http\Request $request) {
    $item = $request->only(['nome', 'preco', 'imagem']);
    $carrinho = session()->get('carrinho', []);
    $carrinho[] = $item; 
    session()->put('carrinho', $carrinho); 
    return redirect()->route('carrinho'); 
})->name('adicionar.carrinho');


Route::get('/carrinho', function () {
    $carrinho = session()->get('carrinho', []);
    return view('carrinho', compact('carrinho')); 
})->name('carrinho');


Route::post('/remover-carrinho', function () {
    $carrinho = session()->get('carrinho', []);
    $index = request()->input('index');
    unset($carrinho[$index]);
    session()->put('carrinho', array_values($carrinho));

    return redirect('/carrinho');
})->name('remover.carrinho');

Route::get('/finalizar', function () {
    $carrinho = session()->get('carrinho', []);
    $total = array_sum(array_column($carrinho, 'preco'));
    return view('finalizar', compact('carrinho', 'total'));
})->name('finalizar');

Route::post('/finalizar-pedido', function (Illuminate\Http\Request $request) {
    $pagamento = $request->input('pagamento');
    $endereco = $request->input('endereco');

    session()->forget('carrinho');

    return redirect('/')->with('success', 'Pedido finalizado com sucesso!');
})->name('finalizar.pedido');