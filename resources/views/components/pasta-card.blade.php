   {{-- Product card --}}
   <div class="product-card">
       <img src="{{ $image }}" alt="">
       <h3>
           <a href="{{ route('single-product', ['id' => $id]) }}">
               {{ $title }}
           </a>
       </h3>
   </div>
   {{-- / Product card --}}
