<div >

    <h2 >Manage Categories</h2>

    <form wire:submit.prevent="saveCategory" >

        <input type="text" wire:model="name" placeholder="Category Name"  />

        <button type="submit">Add Category</button>

    </form>

    @if (session()->has('message'))

        <div>{{ session('message') }}</div>

    @endif

    <ul>

        @foreach ($categories as $category)

            <li>{{ $category->name }}</li>

        @endforeach

    </ul>

</div>