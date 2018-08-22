<script>
    export default {
        data(){
            return{
                sliderCaption:[
                    ''
                ]

            }
        }
    }
</script>

<template>
    <section class="grid-container fluid section-nine">
        <div class="grid-container ">
            <div class="grid-x">
                <div class="row  ">
                    <div class="column medium-8 medium-offset-2">
                        <div class="orbit" role="region" aria-label="slider" data-orbit>
                            <ul class="orbit-container text-slider">

                                <li class="is-active orbit-slide">
                                    <div class="docs-example-orbit-slide">
                                        <p class="text-center">
                                            " When most people travel to Nairobi, they want to see the mara.
                                            but i've been spending most of my time in neighborhood, living
                                            like locals."
                                        </p>

                                        <p class="text-center writter-name">From Joseph Wachira, Lived in <span class="location">Wasini</span></p>
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <div class="docs-example-orbit-slide">
                                        <p class="text-center">
                                            " When most people travel to Nairobi, they want to see the mara.
                                            but i've been spending most of my time in neighborhood, living
                                            like locals."
                                        </p>

                                        <p class="text-center writter-name">From Joseph Wachira, Lived in <span class="location">Wasini</span></p>
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <div class="docs-example-orbit-slide">
                                        <p class="text-center">
                                            " When most people travel to Nairobi, they want to see the mara.
                                            but i've been spending most of my time in neighborhood, living
                                            like locals."
                                        </p>

                                        <p class="text-center writter-name">From Joseph Wachira, Lived in <span class="location">Wasini</span></p>
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <div class="docs-example-orbit-slide">
                                        <p class="text-center">
                                            " When most people travel to Nairobi, they want to see the mara.
                                            but i've been spending most of my time in neighborhood, living
                                            like locals."
                                        </p>

                                        <p class="text-center writter-name">From Joseph Wachira, Lived in <span class="location">Wasini</span></p>
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <div class="docs-example-orbit-slide">
                                        <p class="text-center">
                                            " When most people travel to Nairobi, they want to see the mara.
                                            but i've been spending most of my time in neighborhood, living
                                            like locals."
                                        </p>

                                        <p class="text-center writter-name">From Joseph Wachira, Lived in <span class="location">Wasini</span></p>
                                    </div>
                                </li>
                            </ul>
                            <nav class="orbit-bullets">
                                <div class="slider-indicator">
                                    <button class="is-active" data-slide="0"><span
                                            class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span>
                                    </button>
                                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                                    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                                    <button data-slide="4"><span class="show-for-sr">Fourth slide details.</span></button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>



<style lang="scss" scoped>
.section-nine {
    .text-slider{
        margin: 0px auto;
    }
    .orbit-slide{

    }
}

</style>