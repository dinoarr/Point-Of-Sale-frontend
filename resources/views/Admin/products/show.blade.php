@extends('layouts.app')

@section('content')

<div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-start max-w-6xl px-4 mx-auto py-8 md:py-12">
    <div class="grid">
        <a href="/" class="mb-2"><i class="fa-solid fa-chevron-left text-red-500 hover:text-red-600"></i></a>
      <img
        src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
        alt="Product Image"
        class="aspect-square object-cover  border rounded-lg overflow-hidden h-[500px] w-[600px]"
      />
    </div>
    <div class="grid gap-6 md:gap-10 py-10">
      <div>
        <h1 class="text-3xl md:text-4xl font-bold">Premium Leather Backpack</h1>
      </div>
      <div class="grid gap-4">
        <p class="text-muted-foreground">
          Crafted from premium full-grain leather, this backpack is designed to last. With a spacious main
          compartment, padded laptop sleeve, and multiple pockets, it's the perfect companion for work, travel, or
          everyday use.
        </p>
        <div class="flex items-center justify-between">
          <div class="text-4xl font-bold">$199.99</div>
        </div>
      </div>
      <div class="grid gap-4">
        <div>
          <h2 class="text-xl font-bold">Product Details</h2>
          <ul class="mt-2 space-y-2 text-muted-foreground">
            <li>
              <span class="font-medium">Brand:</span> Acme
            </li>
            <li>
              <span class="font-medium">Stock:</span> 1234
            </li>
            <li>
              <span class="font-medium">Category:</span> Men
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection   