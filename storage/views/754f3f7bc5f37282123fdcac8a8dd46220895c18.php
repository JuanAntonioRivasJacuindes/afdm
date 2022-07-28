<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
        <?php $__env->startSection('title','Afodemy.com'); ?>
        <?php $__env->startSection('description','Diplomados y cursos de criminología y criminalistica'); ?>
        <?php $__env->startSection('route','https://user.afodemy.com'); ?>

<style>
    ::-webkit-scrollbar {
  width: 0px;


}

/* Track */


/* Handle */


/* Handle on hover */

        .layout_background{
            background-image: url("<?php echo e(asset('storage/img/landing_bg.webp')); ?>");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        }
    #sync1 .item {

        /* background: #0c83e7; */

        width: 100%;
        color: #FFF;
        border-radius: 3px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        text-align: center;
    }



    #sync2 .item {

        background: #C9C9C9;
        color: #FFF;
        border-radius: 3px;
        text-align: center;
        cursor: pointer;
    }

    #sync2 .item:hover {
        transform: scale(1.1);
        -webkit-transition: transform .2s ease-in-out;
        filter: brightness(2);

    }


    #sync2 .current .item {
        transform: scale(1.1);
        filter: brightness(2);



    }



    #sync1.owl-theme {
        position: relative;
    }
</style>

<body class="bg-primary">

    <!-- content goes here -->


    <section class="  sm:w-full  sm:mx-0 sm:px-0 lg:w-auto lg:mx-20 lg:px-20   justify-center items-center">


        <div class="w-full md:w-full rounded-2xl shadow-lg content-center ">
            <div id="sync1" class="owl-carousel owl-theme ">
                <?php $__currentLoopData = $diplomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diploma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item aspect-4/3 lg:aspect-16/9 static"
                        style="  background-image: url('<?php echo e($diploma->poster_url()); ?>'); ">

                        <div
                            class="rounded-2xl w-full lg:w-1/2 bg-slate-700 bg-opacity-50 absolute bottom-0 text-sm lg:text-md max-h-min  ">
                            <div class="p-2 lg:p-5 text-justify">

                                <p class="p-5  max-h-24 md:max-h-40 overflow-y-scroll   "><?php echo e($diploma->description); ?></p>

                                <div class=" w-full align-middle flex justify-around ">
                                    <a href="<?php echo e(route('diploma.preview', $diploma->id)); ?>"
                                        class="bg-gray-800 p-3   rounded-md items-center ">INFORMACIÓN</a>
                                    <a href="https://api.whatsapp.com/send?phone=+521<?php echo e($diploma->info->contact ?? '5520824098'); ?>&text=Hola,%20Tengo%20interes%20en%20<?php echo e($diploma->title); ?>" target="blank" class="bg-gray-800 p-3 rounded-md items-center ">INSCRIPCION</a>
                                    <a href="http://www.facebook.com/sharer.php?u=<?php echo e(route('diploma.preview', $diploma->id)); ?>"
                                        class="bg-gray-800 p-3  rounded-lg "> COMPARTIR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div id="sync2" class="owl-carousel owl-theme my-2">
                <?php $__currentLoopData = $diplomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diploma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item hover:bg-black my-1">
                        <img class="brightness-50" src="<?php echo e($diploma->flyer_url()); ?>" alt="">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
        <!-- partial -->


    </section>



</body>




<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>


<script>
    $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 4000,
            nav: false,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 100,

        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                smartSpeed: 500,
                slideSpeed: 5000,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {

            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });

    // grab everything we need
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>


     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/welcome.blade.php ENDPATH**/ ?>