<div>

    <form wire:submit.prevent="saveProduct">

        <input type="text" wire:model="title" placeholder="Title" required>

        <textarea wire:model="description" placeholder="Description" required></textarea>

        <input type="number" wire:model="price" placeholder="Price" required>

	<select wire:model="category_id" >

            <option value="">Select Category</option>

                @foreach ($categories as $category)

                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach

         </select>

        <input type="file" wire:model="image" required>

        <button type="submit">Add Product</button>

    </form>

    @if (session()->has('message'))

        <p>{{ session('message') }}</p>

    @endif

</div>