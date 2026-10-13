<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HargaProduk extends Component
{
    public function __construct(public int $nilai, public bool $diskon = false) {}
    public function format(): string
    {
        return 'Rp ' . number_format($this->diskon ? $this->nilai * 0.9 : $this->nilai, 0, ',', '.');
    }

    public function render(): View|Closure|string
    {
        return view('components.harga-produk');
    }
}
