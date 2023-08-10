@props(['heading'])
<style>
    .list-group a.active{
    
        background-color: #f31717 !important;
        border-color: #f31717 !important;
    }
    

    
    </style>
<div class="col-lg-4">
    <div class="list-group mt-5">
        <a class="list-group-item list-group-item-action">Sidebar Links </a>
        <a href="/admin/categories" class="list-group-item list-group-item-action {{ request()->is('admin/categories') ? 'active' : '' }}" >
            All Categories
          </a>

          <a href="/admin/categories/create" class="list-group-item list-group-item-action {{ request()->is('admin/categories/create') ? 'active' : '' }}">Create new category</a>

        <a href="/admin/posts" class="list-group-item list-group-item-action {{ request()->is('admin/posts') ? 'active' : '' }}" >
          All Posts
        </a>
        <a href="/admin/posts/create" class="list-group-item list-group-item-action {{ request()->is('admin/posts/create') ? 'active' : '' }}">Create new post</a>

        
      </div>
</div>

<div class="col-lg-8">
    <!-- Contact Form Inner Start -->
 


     {{ $slot }}
         
      
  
     <!-- Contact Form Inner End -->
</div>