<style>
    .font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
    }
</style>

@extends('layouts.app')


@section('content')

<div class="lg:p-16 md:p-16 xl:p-16">
    <div>
            <div class="m-5 rounded-lg shadow-md  p-4" style="border: 1px solid #3f3f3f">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                    <div>
                        <div class="flex flex-col">
                            <div class="hidden md:block lg:block xl:block" style="height: 20rem">
                                <iframe class="lg:h-full md:h-full md:w-11/12 md:object-cover sm:w-full sm:object-cover rounded-lg lg:w-11/12 lg:object-cover"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.229411362181!2d-0.21818202172911574!3d5.558517935517043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf909f07f99767%3A0xe565ac46eb1c9044!2sWest%20Ridge%2C%20Accra!5e0!3m2!1sen!2sgh!4v1594392710332!5m2!1sen!2sgh" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <div class="flex justify-center">
                                <div class="md:hidden lg:hidden xl:hidden">
                                    <a class="font text-black" href="https://goo.gl/maps/AiNVc2BUR2hAtiS17">
                                        <div class="w-full px-10 flex items-center justify-center h-10" style="border: 1px solid #3f3f3f">
                                            View Location
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-3 mt-3">
                                <div>
                                    <div class="font font-bold">Geo Address</div>
                                    <div class="font text-indigo-500">addreess</div>
                                </div>
                                <div>
                                    <div class="font font-bold">Postal GPS</div>
                                    <div class="font text-indigo-500">addreess</div>
                                </div>
                                <div>
                                    <div class="font font-bold">Post Office</div>
                                    <div class="font text-indigo-500">addreess</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-11 lg:grid-cols-11 xl:grid-cols-11">
                            <div class="hidden md:block lg:block xl:block lg:col-span-1 ...">
                                <img src="{{asset("/images/line1.png")}}" style="height: 24rem; background-color: #3f3f3f" class="w-1" alt="">
                            </div>
                            <div class="font p-3 lg:col-span-10 ...">
                                <div class="text-4xl md:text-5xl lg:text-5xl xl:text-5xl font-bold italic py-2">
                                    Contact Us
                                </div>
                                <div class="py-2 font-bold italic">
                                    Woggle Africa. 
                                </div>
                                <div class="text-sm">
                                    4 Techiman Center, Suite 1479 <br>
                                    Accra, ML 94111
                                </div>
                                <div class="my-6">
                                    Email: <span class="text-indigo-700">learn.woogle@gmail.com</span> 
                                </div>
                                <div class="my-6">
                                    Phone Number: <span class="text-indigo-700">(+233) 24 363 3658</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div> 
</div>

@endsection