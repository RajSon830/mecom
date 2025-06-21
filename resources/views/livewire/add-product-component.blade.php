<div>
       <!-- add product form -->
            <div class="com_card mx-2">
              <h3 class="com_card_title mb-3">Add New Product</h3>

              <form wire:submit.prevent="saveProduct">
                <label for="" class="form_label">Product Title</label>
                <input wire:model="title"  type="text" class="form-input" />

                <label for="" class="form_label mt-2">Category</label>
                <select wire:model="category_id" name="" class="form-input" id="">
                   <option value="">Select Category</option>

                    @foreach ($categories as $category)

                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach

                </select>

                <label for="" class="form_label mt-2">Description</label>
                <textarea  wire:model="description" name="" class="form-input" id=""></textarea>

                <label for="" class="form_label mt-2">Price</label>
                <input wire:model="price"  type="number" class="form-input" />

                <label for="" class="form_label mt-2">Product Image</label>
                <input wire:model="image"  type="file" class="form-input" />

                <button type="submit" class="btn-one mt-3">Add Product</button>
              </form>


                @if (session()->has('message'))

                    <div class="alert alert-success mt-2">{{ session('message') }}</div>

                @endif
            </div>

           
</div>



