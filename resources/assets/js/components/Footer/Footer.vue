<script>
    import MainFooter from './MainFooter.vue';
    import Slider from '../Sliders/FooterSlide.vue';
    export default {
        components: {
            'main-footer':MainFooter,
            'slider':Slider,
        },
        data(){
            return{
                footerMenu:[
                    'Privacy',
                    'Terms',
                    'Accessibility',
                    'Legal',
                    'Site Map',
                    'Site Feedback'
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<template>
    <div>
        <slider></slider>
        <main-footer></main-footer>
        <section class="grid-container fluid section-eleven">
            <div class="grid-x">
                <div class="medium-12 cell">
                    <ul class="menu align-center">
                        <li v-for="item in footerMenu"><a href="#">{{item}}</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</template>

<style lang="scss" scoped>
    .section-ten{
        padding-top: 96px;
    }

</style>
