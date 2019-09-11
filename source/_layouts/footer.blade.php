<div id="footer" class="text-sm text-white">
    <div class="footer-top leading-normal bg-background-secondary">
        <div class="container pt-16 pb-8">
            <div class="md:flex md:mb-4">
                <div class="md:w-1/3 mb-10 md:mb-0">
                    <img src="/assets/images/logo.svg" class="mb-4 md:mb-6" width="150" alt="Full Stack Europe"><br>
                    23, 24 & 25 October 2019 - {{ $page->venue }}
                </div>
                <div class="relative md:w-2/3 md:text-right">
                    <ul class="list-reset">
                        <li data-scroll class="md:inline-block mb-4"><a href="/#speakers">speakers</a></li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4"><a href="/#workshops">workshops</a></li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4"><a href="/#venue">venue</a></li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4"><a href="/#sponsors">sponsors</a></li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4"><a href="/cfp">cfp</a></li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4"><a href="#newsletter">newsletter</a></li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4"><a href="/code-of-conduct">code of conduct</a></li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4"><a href="/faq">faq</a></li>
                        <li class="md:ml-6 md:inline-block"><a href="{{ $page->ticketsUrl }}" target="_blank">tickets</a></li>
                    </ul>
                    <div class="md:absolute text-center md:text-right pin-b pin-r mt-10">
                        Need help?<br>
                        +32 468 109891 |
                        <a href="mailto:hello@fullstackeurope.com">hello@fullstackeurope.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-background leading-loose text-center">
        <div class="container py-8">
            <div class="md:flex">
                <div class="md:w-3/4 md:text-left">
                    &copy; Full Stack Europe
                    <span class="hidden md:inline-block">|</span>
                    <span class="md:hidden"><br></span>
                    Design by <a href="https://janvanechelpoel.be">Jan Van Echelpoel</a>
                    <span class="hidden md:inline-block">|</span>
                    <span class="md:hidden"><br></span>
                    Event management by <a href="https://on3.events">On 3 Events</a>
                </div>
                <div class="md:w-1/4 md:text-right text-lg">
                    @include('_layouts._social')
                </div>
            </div>
        </div>
    </div>
</div>
