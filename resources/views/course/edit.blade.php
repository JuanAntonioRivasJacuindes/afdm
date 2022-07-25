<x-app-layout>
    @livewire('course.update-course-form', ['course_id' => $course->id])
    @livewire('stripe.plans',['product_id'=>$course->product_id])
</x-app-layout>
