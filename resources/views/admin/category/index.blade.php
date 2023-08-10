<x-layout>


    @include('frontend.header')



        <!-- Blog Section Start -->
        <div class="section blog-area section-padding pt-3" style="border-top:1px solid#efefef">
            <div class="container">
                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper">
                        <div class="row contact-form-inner justify-content-center">
                            
                            <x-settings>



                              <table class="table ">
                                <thead>
                                  <tr>
                                    <th scope="col">Category name</th>
                                    <th scope="col">Publish</th>
                                    <th scope="col">Action</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>


                                    @foreach (\App\Models\Category::all() as $category)
                                        
                                   


                                  <tr>
                                    
                                    <td>{{ $category->name }}</td>
                                    <td> <span class="badge bg-info rounded-pill">{{ $category->created_at->diffForHumans(); }}</span></td>
                                    <td>
                                      <a class="badge bg-primary" href="/admin/categories/{{ $category->id }}/edit" >Edit</a> 
                                      
                                      {{-- <a href=""class="badge bg-danger">Delete</a> --}}

                                      <form action="/admin/categories/{{ $category->id }}" method="POST">
                                        
                                        @csrf

                                        @method('DELETE')

                                        <button class="badge bg-danger">Delete</button>
                                      
                                      </form>

                                    </td>
                                  </tr>
                                  @endforeach


                                </tbody>
                              </table>
                                 



                            </x-settings>
                   
                        </div>
                    </div>
                    <!-- Contact Form Wrapper End -->
            </div>
        </div>
        <!-- Blog Section End -->





    <x-subscribe></x-subscribe>

    @include('frontend.footer')




</x-layout>

<script>

    /* Encode string to slug */
    function convertToSlug( str ) {
        
        //replace all special characters | symbols with a space
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
                .toLowerCase();
        
        // trim spaces at start and end of string
        str = str.replace(/^\s+|\s+$/gm,'');
        
        // replace space with dash/hyphen
        str = str.replace(/\s+/g, '-');   
        document.getElementById("slug-title").value = str;
        //return str;
    }

</script>