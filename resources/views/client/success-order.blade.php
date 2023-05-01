<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar :path="$shop->path"/>
    <div class="container py-y d-flex flex-column align-items-center gap-3">
      <img src="{{ asset('client/img/success-order.png') }}" class="border rounded rounded-3" style="width:40%;height:auto;">
      <div class="text-center">
        <h4>Terima kasih banyak atas pesanan anda</h4>
        <p>Kode pesanan : <u><b class="text-danger">{{ $order_code }}</b></u></p>
        <p>You can always track your orders in the <a href="{{ route('clientCheckOrder') }}"><u>Cek Pesanan</u></a>, please keep and don't forget this code for check status order.</p>
      </div>
      <a href="{{ route('clientCheckOrder') }}" class="btn btn-primary">Cek Pesanan sekarang</a>
    </div>
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>