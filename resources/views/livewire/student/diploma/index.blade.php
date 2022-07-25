<div class="container sm:pr-2 lg:px-4">
    <style>
        label:after {
            content: '+';
            position: absolute;
            right: 1em;
            color: #fff;
        }

        input:checked+label:after {
            content: '-';
            line-height: .8em;
        }

        .accordion__content {
            max-height: 0em;
            transition: all 0.4s cubic-bezier(0.865, 0.14, 0.095, 0.87);
        }

        input[name='panel']:checked~.accordion__content {
            /* Get this as close to what height you expect */
            max-height: 50em;
        }
    </style>
    <div class=" text-center sm:m-0 lg:m-5 w-full sm:pl-0 lg:p-5">
        <iframe class="w-full aspect-video" src="{{ $active_video->iframe ?? ' no hay' }}" frameborder="0"
            allow="autoplay; fullscreen" allowfullscreen></iframe>

    </div>
    <div class="accordion flex flex-col items-center justify-center h-screen">
        <!--  Panel 1  -->
    @foreach ($subjects as $key => $subject)
        <div class="w-full">
            <input type="checkbox" name="panel" id="panel-{{$key}}" class="hidden">
            <label for="panel-{{$key}}" class="relative block bg-primary text-white p-4 shadow border-b border-grey">{{ $subject->name }}</label>
            <div class="accordion__content overflow-hidden bg-grey-lighter">
                @foreach ($subject->videos() as $video)
                <div>
                    <a wire:click="activate({{ $video->id }})">

                        {{ $video->name }}

                    </a>

                </div>
            @endforeach
            </div>
          </div>

    @endforeach

</div>
</div>
</div>

</div>
