<section class="min-h-screen md:relative bg-white">
<div class="grid text-black md:grid-cols-3 gap-4">
  <div class="md:col-span-2 space-y-8 px-4 md:pr-8 py-4">
    <div class="space-y-2">
        <h1 class="font-bold text-md">Vos témoignages : </h1>
        <p class="text-sm lead-tight">
           
        </p>
    </div>
    <div class="space-y-2">
        <div id="carouselTemoignages" class="carousel slide carousel-fade relative"
            data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                @foreach($carousels as $carousel)
                <button type="button" data-bs-target="#carouselTemoignages"
                    data-bs-slide-to="{{ ($carousel->id) - 1 }}" class="{{ $carousel->id === 1 ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$carousel->id}}">
                </button>
                @endforeach
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                @foreach($carousels as $carousel)
                <div class="{{ $carousel->id === 1 ? 'active' : ''}} carousel-item float-left w-full">
                    <div class=" rounded-xl text-center text-white bg-black-perso h-96 grid content-center">
                        <div class="rounded py-12 md:py-24 mx-24">
                            <blockquote class="italic px-2 py-2">{{$carousel->testimonial->content}}
                            </blockquote>
                            <small class="italic">Posté 
                                @if(isset($carousel->testimonial->name) && ($carousel->testimonial->last_name))
                                 par : {{ $carousel->testimonial->name}} {{ $carousel->testimonial->last_name}}
                                @endif
                                le : {{ $carousel->testimonial->created_at() }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselTemoignages"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselTemoignages"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
  </div>
  <div class="bg-blue-perso mt-2 rounded-lg ">
    <div class="pb-12 max-w-[700px] mx-auto px-3 lg:px-6">
       pub
    </div>
  </div>
</div>
<h2 class="text-center">Vous aussi laissez votre témoignage <a class="text-blue-perso" href="">en cliquant ici</a> </h2>

</section>