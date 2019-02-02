<div id="speakers-outer" class="bg-white mb-12 md:mb-0">
    <div class="container mx-auto bg-white md:px-0">
        <div id="speakers" class="bg-white pt-10 md:pt-20 -mt-20">
            <h3 class="text-center text-sm uppercase text-grey-dark mb-2">Meet our speakers</h3>
            <h2 class="text-3xl font-medium text-center mb-8 md:mb-16">Featured talks from</h2>
            <div class="md:flex">
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-12 mb-6 md:mb-0">
                    @include('_partials.speaker', ['name' => 'John Doe', 'twitter' => 'johndoe'])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-12 mb-6 md:mb-0">
                    @include('_partials.speaker', ['name' => 'John Doe', 'twitter' => 'johndoe'])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-12">
                    @include('_partials.speaker', ['name' => 'John Doe', 'twitter' => 'johndoe'])
                </div>
            </div>
        </div>
    </div>
</div>