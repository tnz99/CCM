@extends('components.layout')
@section('body_class', 'the-laws-1')
@section('content')
<section id="main-section" class="d-flex justify-content-between vw-65">
    <div class="mt-145 ml-146">
        <div class="p-0">
            <h1 class="text-yellow fw-700">1995</h1>
            <p class="text-white fs-24 fw-700 font-normal lh-normal mt-22" style="width: 25ch;">Bhutan's Forest and Nature Conservation Act - "Conservation and sustainable management of Bhutan's forests."</p>

            <ul class="list-none d-flex p-0 mt-148">
                <li class="mr-60"><a href="" class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1991</a></li>
                <li class="mr-60"><a href="" class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1992</a></li>
                <li class="mr-60"><a href="" class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1993</a></li>
                <li><a class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1994</a></li>
            </ul>
        </div>

        <div class="d-flex align-items-center justify-content-between mt-145">
            <ul class="d-flex align-items-center justify-content-between list-none">
                <li><a href="the-laws.html" class="no-underline circle-xm d-flex justify-content-center align-items-center mr-10 border-0">1</a></li>
                <li><a href="the-laws-1.html" class="no-underline circle-xm d-flex justify-content-center align-items-center border-0">2</a></li>
            </ul>

            <div class="d-flex align-items-center">
                <p class="p-0 m-0 fw-400 lh-norma">Next story</p>
                <div class="circle-xm d-flex justify-content-center align-items-center ml-9">
                    <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M38 17.0001C38 17.5636 37.7776 18.1042 37.3817 18.5026L22.6039 33.3777C21.7795 34.2075 20.4427 34.2075 19.6183 33.3777C18.794 32.5479 18.794 31.2023 19.6183 30.3725L30.7922 19.1251H2.11111C0.945145 19.1251 0 18.1737 0 17.0001C0 15.8264 0.945145 14.875 2.11111 14.875L30.7922 14.875L19.6183 3.62762C18.794 2.79774 18.794 1.45227 19.6183 0.622393C20.4427 -0.207464 21.7795 -0.207464 22.6039 0.622393L37.3817 15.4975C37.7776 15.8959 38 16.4365 38 17.0001Z" fill="black"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.704783 -0.709422 0.704783 -0.709422 25.3333 17.0001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(0.704783 -0.709422 -0.704783 -0.709422 10.9778 25.5001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <img src="../images/mani.png" class="p-0 " style="width: 239px; height: 532px;"/>   
    
    <div class="mt-145 ml-9">
        <ul class="m-0 text-white fw-400 lh-normal font-normal fs-20" style="width: 35ch;">
            <li class="p-1">The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area.</li>
            <li class="p-1">Bhutan has maintained a high forest coverage, which contributes to carbon sequestration and helps mitigate climate change.</li>
            <li class="p-1">The act has facilitated the protection of biodiversity, including endangered species like the Bengal tiger and snow leopard.</li>
        </ul>

        <ul class="list-none d-flex p-0 ml-9" style="margin-top: 43px;">
            <li class="mr-60"><a class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1996</a></li>
            <li class="mr-60"><a class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1997</a></li>
            <li class="mr-60"><a class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1998</a></li>
            <li class="mr-60"><a class="fs-24 lh-normal fw-400 font-normal no-underline text-white">1999</a></li>
            <li><a class="fs-24 lh-normal fw-400 font-normal no-underline text-white">2000</a></li>
        </ul>
    </div>
</section>
@endsection

@section('nav')
<x-circular_nav />
@endsection
