<x-layout>


    @include('frontend.header')



        <!-- Blog Section Start -->
        <div class="section blog-area section-padding pt-3" style="border-top:1px solid#efefef">
            <div class="container">
                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper">
                        <div class="row contact-form-inner justify-content-center">
                            
                            <x-settings heading="Create new category">


                                <form action="/admin/categories" method="post" enctype="multipart/form-data">
                                    @csrf
                        
                        
                                        <div class="col-md-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form text-center">
                                               <h3>Create new post</h3>
                                            </div>
                                            <!-- Single Form End -->
                                         
                                        </div>
                        
                                        <x-forms.input name="name" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" id=''/>

                                        <x-forms.input name="slug" onload="" onkeyup="" id="slug-title"/>
                        
                                      
                                      
                                   
                                        <div class="col-md-12">
                                           
                                            <!-- Single Form Start -->
                                            <div class="contact-btn">
                                                <x-forms.button>Publish category</x-forms.button>
                                            </div>
                                            <!-- Single Form End -->
                                            <x-success-flash/>
                                        </div>
                                 
                                </form>







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